<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\ShortLink;
use App\Models\UserCampaign;
use App\Models\System\Admin;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\ShortLinkRequest;
use Illuminate\Support\Facades\Storage;

class ShortLinkController extends AdminController
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $shortlink = ShortLink::orderByDesc('id')
            ->paginate(20);
        $viewData = [
            'shortlink' => $shortlink
        ];
        return view('admin::pages.shortlink.index', $viewData);
    }
    public function create()
    {
        $user_id = get_data_user('admins');
        $user_master = Admin::where('id',$user_id)->pluck('user_invite')->first();
        if($user_master == 0){
            $campaign = UserCampaign::where('user_id',$user_id)->get();
        } else {
            $campaign = UserCampaign::where('user_id',$user_master)->get();
        }
        $viewData = [
            'campaign' => $campaign
        ];
        return view('admin::pages.shortlink.create',$viewData);
    }
    public function store(ShortLinkRequest $request)
    {
        $data = $request->except(['save', '_token']);
        $data['created_at'] = Carbon::now();
        $data['created_by'] = get_data_user('admins');
        $data['user_id'] = get_data_user('admins');
        $data['code_share'] = generate_code_5();
        $data['short_link'] = 'unm.ly/'.$data['code_share'];
        $shortlinkID = ShortLink::insertGetId($data);

        if ($shortlinkID) {
            $this->showMessagesSuccess();
            return redirect()->route('get_admin.shortlink.index');
        }
        $this->showMessagesError();
        return  redirect()->back();
    }
    public function edit($id)
    {
        $shortlink = ShortLink::findOrFail($id);
        return view('admin::pages.shortlink.update', compact('shortlink'));
    }

    public function update(Request $request, $id)
    {
        $shortlink = ShortLink::findOrFail($id);
        $data = $request->except(['save', '_token']);
        $data['updated_at'] = Carbon::now();
        $data['updated_by'] = get_data_user('admins');
        $shortlink->fill($data)->save();
        $this->showMessagesSuccess();
        return redirect()->route('get_admin.shortlink.index');
    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $shortlink = ShortLink::findOrFail($id);
            $shortlink->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }

        return redirect()->to('/');
    }
    public function countViewShortLink(Request $request)
    {
        return 'ádasdasds';
        
    }
}
