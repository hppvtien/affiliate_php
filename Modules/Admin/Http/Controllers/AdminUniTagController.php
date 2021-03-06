<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Uni_Tag;
use App\Models\ProductTag;
use App\Models\Blog\SeoBlog;
use App\Service\Seo\RenderUrlSeoBLogService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Requests\AdminUniTagRequest;

class AdminUniTagController extends AdminController
{
    public function index()
    {
        $uni_tag = Uni_Tag::orderByDesc('id')
            ->paginate(20);
        $viewData = [
            'uni_tag' => $uni_tag,
        ];
        return view('admin::pages.uni_tag.index', $viewData);
    }

    public function create()
    {
        $uni_tag = Uni_Tag::orderByDesc('id')->get();

        return view('admin::pages.uni_tag.create',compact('uni_tag'));
    }

    public function store(AdminUniTagRequest  $request)
    {
        $data = $request->except(['save','_token']);
        $data['created_at'] = Carbon::now();

        if(!$request->meta_title)             $data['meta_title'] = $request->meta_title;
        if(!$request->meta_description) $data['meta_desscription'] = $request->meta_desscription;

        $menuID = Uni_Tag::insertGetId($data);
        if($menuID)
        {
            $this->showMessagesSuccess();
            RenderUrlSeoBLogService::init($request->slug,SeoBlog::TYPE_MENU, $menuID);
            return redirect()->route('get_admin.uni_tag.index');
        }
        $this->showMessagesError();
        return  redirect()->back();
    }

    public function edit($id)
    {
        $tags = Uni_Tag::findOrFail($id);
        $uni_tag = Uni_Tag::orderByDesc('id')->get();
        
        $viewData = [
            'tags' => $tags,
            'uni_tag' => $uni_tag,
        ];

        return view('admin::pages.uni_tag.update', $viewData);
    }

    public function update(AdminUniTagRequest $request, $id)
    {
        $uni_tag = Uni_Tag::findOrFail($id);
        $data = $request->except(['save','_token']);
        $data['updated_at'] = Carbon::now();

        if(!$request->meta_title)             $data['meta_title'] = $request->meta_title;
        if(!$request->meta_description) $data['meta_desscription'] = $request->meta_desscription;

        $uni_tag->fill($data)->save();
        RenderUrlSeoBLogService::update($request->slug,SeoBlog::TYPE_MENU, $id);
        $this->showMessagesSuccess();
        return redirect()->route('get_admin.uni_tag.index');
    }

    public function delete(Request $request, $id)
    {
        if($request->ajax())
        {
            $product_tag = Uni_Tag::findOrFail($id);
            if ($product_tag)
            {
                ProductTag::where('tag_id', $id)->delete();
                $product_tag->delete();
            }
            return response()->json([
                'status' => 200,
                'message' => 'Xo?? d??? li???u th??nh c??ng'
            ]);
        }

        return redirect()->to('/');
    }
}
