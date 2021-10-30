<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\MenuA;

class MenuaController extends Controller
{
    public function index(){
        
        $menus = MenuA::where('parent_id', '=', 0)->get();
        $allMenus = MenuA::pluck('title','id')->all();
        $viewData = [
            'menus'=>$menus,
            'allMenus'=>$allMenus,
        ];
        return view('admin::pages.menu.menuTreeview',$viewData);
    }

    public function store(Request $request)
    {
        // $request->validate([
        //    'title' => 'required',
        // ]);
        $data = $request->except(['save', '_token']);
        // dd($request->all());
        // $data = $request->all();
        $data['parent_id'] = empty($data['parent_id']) ? 0 : $data['parent_id'];
        MenuA::insertGetId($data);
        // MenuA::create($input);
        return back()->with('success', 'Menu added successfully.');
    }

    public function show()
    {
        $menus = MenuA::where('parent_id', '=', 0)->get();
        return view('admin::pages.menu.dynamicMenu',compact('menus'));
    }
}
