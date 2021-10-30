<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Menu_system;
use Illuminate\Support\Facades\Storage;
use App\Models\Menu_item;
use App\Models\Uni_Category;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Blog\Uni_PostCategory;

class MenuController extends Controller
{
    public function index()
    {
        $menuitems = '';
        $desiredMenu = '';
        if (isset($_GET['id']) && $_GET['id'] != 'new') {
            $id = $_GET['id'];
            $desiredMenu = Menu_system::where('id', $id)->first();
            if ($desiredMenu->content != '') {
                $menuitems = json_decode($desiredMenu->content);
                $menuitems = $menuitems[0];
                foreach ($menuitems as $menu) {
                    $menu->title = Menu_item::where('id', $menu->id)->value('title');
                    $menu->title_en = Menu_item::where('id', $menu->id)->value('title_en');
                    $menu->name = Menu_item::where('id', $menu->id)->value('name');
                    $menu->name_en = Menu_item::where('id', $menu->id)->value('name_en');
                    $menu->slug = Menu_item::where('id', $menu->id)->value('slug');
                    $menu->slug_en = Menu_item::where('id', $menu->id)->value('slug_en');
                    $menu->thumbnail = Menu_item::where('id', $menu->id)->value('thumbnail');
                    $menu->icon_thumb = Menu_item::where('id', $menu->id)->value('icon_thumb');
                    $menu->target = Menu_item::where('id', $menu->id)->value('target');
                    $menu->type = Menu_item::where('id', $menu->id)->value('type');
                    if (!empty($menu->children[0])) {
                        foreach ($menu->children[0] as $child) {
                            $child->title = Menu_item::where('id', $child->id)->value('title');
                            $child->title_en = Menu_item::where('id', $child->id)->value('title_en');
                            $child->name = Menu_item::where('id', $child->id)->value('name');
                            $child->name_en = Menu_item::where('id', $child->id)->value('name_en');
                            $child->slug = Menu_item::where('id', $child->id)->value('slug');
                            $child->slug_en = Menu_item::where('id', $child->id)->value('slug_en');
                            $child->thumbnail = Menu_item::where('id', $child->id)->value('thumbnail');
                            $child->icon_thumb = Menu_item::where('id', $child->id)->value('icon_thumb');
                            $child->target = Menu_item::where('id', $child->id)->value('target');
                            $child->type = Menu_item::where('id', $child->id)->value('type');
                        }
                    }
                }
            } else {
                $menuitems = Menu_item::where('menu_id', $desiredMenu->id)->get();
            }
        } else {
            $desiredMenu = Menu_system::orderby('id', 'DESC')->first();
            if ($desiredMenu) {
                if ($desiredMenu->content != '') {
                    $menuitems = json_decode($desiredMenu->content);
                    $menuitems = $menuitems[0];
                    foreach ($menuitems as $menu) {
                        $menu->title = Menu_item::where('id', $menu->id)->value('title');
                        $menu->title_en = Menu_item::where('id', $menu->id)->value('title_en');
                        $menu->name = Menu_item::where('id', $menu->id)->value('name');
                        $menu->name_en = Menu_item::where('id', $menu->id)->value('name_en');
                        $menu->slug = Menu_item::where('id', $menu->id)->value('slug');
                        $menu->slug_en = Menu_item::where('id', $menu->id)->value('slug_en');
                        $menu->thumbnail = Menu_item::where('id', $menu->id)->value('thumbnail');
                        $menu->icon_thumb = Menu_item::where('id', $menu->id)->value('icon_thumb');
                        $menu->target = Menu_item::where('id', $menu->id)->value('target');
                        $menu->type = Menu_item::where('id', $menu->id)->value('type');
                        if (!empty($menu->children[0])) {
                            foreach ($menu->children[0] as $child) {
                                $child->title = Menu_item::where('id', $child->id)->value('title');
                                $child->title_en = Menu_item::where('id', $child->id)->value('title_en');
                                $child->name = Menu_item::where('id', $child->id)->value('name');
                                $child->name_en = Menu_item::where('id', $child->id)->value('name_en');
                                $child->slug = Menu_item::where('id', $child->id)->value('slug');
                                $child->slug_en = Menu_item::where('id', $child->id)->value('slug_en');
                                $child->thumbnail = Menu_item::where('id', $child->id)->value('thumbnail');
                                $child->icon_thumb = Menu_item::where('id', $child->id)->value('icon_thumb');
                                $child->target = Menu_item::where('id', $child->id)->value('target');
                                $child->type = Menu_item::where('id', $child->id)->value('type');
                            }
                        }
                    }
                } else {
                    $menuitems = Menu_item::where('menu_id', $desiredMenu->id)->get();
                }
            }
        }
        return view('admin::pages.menu_system.index', ['categories' => Uni_Category::all(), 'posts' => Uni_PostCategory::all(), 'menus' => Menu_system::all(), 'desiredMenu' => $desiredMenu, 'menuitems' => $menuitems]);
    }
    public function creat_menu()
    {
        $menuitems = '';
        $desiredMenu = '';
        return view('admin::pages.menu_system.create', ['categories' => Uni_Category::all(), 'posts' => Uni_PostCategory::all(), 'menus' => Menu_system::all(), 'desiredMenu' => $desiredMenu, 'menuitems' => $menuitems]);
    }
    public function store(Request $request)
    {
        $data = $request->all();
        if (Menu_system::create($data)) {
            $newdata = Menu_system::orderby('id', 'DESC')->first();
            \Session::flash('success', 'Menu saved successfully !');
            return redirect()->route('manage-menus', $newdata->id);
        } else {
            return redirect()->back()->with('error', 'Failed to save menu !');
        }
    }

    public function addCatToMenu(Request $request)
    {
        $data = $request->all();
        $menuid = $request->menuid;
        $ids = $request->ids;
        $menu = Menu_system::findOrFail($menuid);
        if ($menu->content == '') {
            foreach ($ids as $id) {
                $data['title'] = Uni_Category::where('id', $id)->value('name');
                $data['title_en'] = Uni_Category::where('id', $id)->value('name_en');
                $data['slug'] = Uni_Category::where('id', $id)->value('slug');
                $data['slug_en'] = Uni_Category::where('id', $id)->value('slug_en');
                $data['icon_thumb'] = Uni_Category::where('id', $id)->value('icon_thumb');
                $data['thumbnail'] = Uni_Category::where('id', $id)->value('thumbnail');
                $data['type'] = 'category';
                $data['menu_id'] = $menuid;
                $data['updated_at'] = NULL;
                Menu_item::create($data);
            }
        } else {
            $olddata = json_decode($menu->content, true);
            foreach ($ids as $id) {
                $data['title'] = Uni_Category::where('id', $id)->value('name');
                $data['slug'] = Uni_Category::where('id', $id)->value('slug');
                $data['title_en'] = Uni_Category::where('id', $id)->value('name_en');
                $data['slug_en'] = Uni_Category::where('id', $id)->value('slug_en');
                $data['icon_thumb'] = Uni_Category::where('id', $id)->value('icon_thumb');
                $data['thumbnail'] = Uni_Category::where('id', $id)->value('thumbnail');
                $data['type'] = 'category';
                $data['menu_id'] = $menuid;
                $data['updated_at'] = NULL;
                Menu_item::create($data);
            }
            foreach ($ids as $id) {
                $array['title'] = Uni_Category::where('id', $id)->value('name');
                $array['slug'] = Uni_Category::where('id', $id)->value('slug');
                $array['title_en'] = Uni_Category::where('id', $id)->value('name_en');
                $array['slug_en'] = Uni_Category::where('id', $id)->value('slug_en');
                $array['icon_thumb'] = Uni_Category::where('id', $id)->value('icon_thumb');
                $array['thumbnail'] = Uni_Category::where('id', $id)->value('thumbnail');
                $array['name'] = NULL;
                $array['name_en'] = NULL;
                $array['type'] = 'category';
                $array['target'] = NULL;
                $array['id'] = Menu_item::where('slug', $array['slug'])->where('name', $array['name'])->where('slug_en', $array['slug_en'])->where('name_en', $array['name_en'])->where('type', $array['type'])->where('icon_thumb', $array['icon_thumb'])->where('thumbnail', $array['thumbnail'])->value('id');
                $array['children'] = [[]];
                array_push($olddata[0], $array);
                $oldata = json_encode($olddata);
                $menu->update(['content' => $olddata]);
            }
        }
    }

    public function addPostToMenu(Request $request)
    {
        $data = $request->all();
        $menuid = $request->menuid;
        $ids = $request->ids;
        $menu = Menu_system::findOrFail($menuid);
        if ($menu->content == '') {
            foreach ($ids as $id) {
                $data['title'] = Uni_PostCategory::where('id', $id)->value('name');
                $data['slug'] = Uni_PostCategory::where('id', $id)->value('slug');
                $data['title_en'] = Uni_PostCategory::where('id', $id)->value('name_en');
                $data['slug_en'] = Uni_PostCategory::where('id', $id)->value('slug_en');
                $data['type'] = 'post';
                $data['menu_id'] = $menuid;
                $data['updated_at'] = NULL;
                Menu_item::create($data);
            }
        } else {
            $olddata = json_decode($menu->content, true);
            foreach ($ids as $id) {
                $data['title'] = Uni_PostCategory::where('id', $id)->value('name');
                $data['slug'] = Uni_PostCategory::where('id', $id)->value('slug');
                $data['title_en'] = Uni_PostCategory::where('id', $id)->value('name_en');
                $data['slug_en'] = Uni_PostCategory::where('id', $id)->value('slug_en');
                $data['type'] = 'post';
                $data['menu_id'] = $menuid;
                $data['updated_at'] = NULL;
                Menu_item::create($data);
            }
            foreach ($ids as $id) {
                $array['title'] = Uni_PostCategory::where('id', $id)->value('name');
                $array['slug'] = Uni_PostCategory::where('id', $id)->value('slug');
                $array['title_en'] = Uni_PostCategory::where('id', $id)->value('name_en');
                $array['slug_en'] = Uni_PostCategory::where('id', $id)->value('slug_en');
                $array['name'] = NULL;
                $array['type'] = 'post';
                $array['target'] = NULL;
                $array['id'] = Menu_item::where('slug', $array['slug'])->where('name', $array['name'])->where('slug_en', $array['slug_en'])->where('name_en', $array['name_en'])->where('type', $array['type'])->orderby('id', 'DESC')->value('id');
                $array['children'] = [[]];
                array_push($olddata[0], $array);
                $oldata = json_encode($olddata);
                $menu->update(['content' => $olddata]);
            }
        }
    }

    public function addCustomLink(Request $request)
    {
        $data = $request->all();
        $menuid = $request->menuid;
        $menu = Menu_system::findOrFail($menuid);
        if ($menu->content == '') {
            $data['title'] = $request->link;
            $data['slug'] = $request->url;
            $data['title_en'] = $request->link_en;
            $data['slug_en'] = $request->url_en;
            $data['type'] = 'custom';
            $data['menu_id'] = $menuid;
            $data['updated_at'] = NULL;
            Menu_item::create($data);
        } else {
            $olddata = json_decode($menu->content, true);
            $data['title'] = $request->link;
            $data['slug'] = $request->url;
            $data['title_en'] = $request->link_en;
            $data['slug_en'] = $request->url_en;
            $data['type'] = 'custom';
            $data['menu_id'] = $menuid;
            $data['updated_at'] = NULL;
            Menu_item::create($data);
            $array = [];
            $array['title'] = $request->link;
            $array['slug'] = $request->url;
            $array['title_en'] = $request->link_en;
            $array['slug_en'] = $request->url_en;
            $array['name'] = NULL;
            $array['name_en'] = NULL;
            $array['type'] = 'custom';
            $array['target'] = NULL;
            $array['id'] = Menu_item::where('slug', $array['slug'])->where('name', $array['name'])->where('slug_en', $array['slug_en'])->where('name_en', $array['name_en'])->where('type', $array['type'])->orderby('id', 'DESC')->value('id');
            $array['children'] = [[]];
            array_push($olddata[0], $array);
            $oldata = json_encode($olddata);
            $menu->update(['content' => $olddata]);
        }
    }

    public function updateMenu(Request $request)
    {

        $newdata = $request->all();
        $menu = Menu_system::findOrFail($request->menuid);
        $content = $request->data;
        $newdata = [];
        $newdata['location'] = $request->location;
        $newdata['content'] = json_encode($content);
        $menu->update($newdata);
    }

    public function updateMenuItem(Request $request)
    {
        $data = $request->all();
        // if()
        // dd($data);
        $item = Menu_item::findOrFail($request->id);
        if (isset($data['thumbnail']) && $item['thumbnail']) {
            Storage::delete('public/uploads_Product/' . $item['thumbnail']);
            $data['thumbnail'] = $this->processUploadFile($data['thumbnail']);
        }  
        if (isset($data['icon_thumb']) && $item['icon_thumb']) {
            Storage::delete('public/uploads_Product/' . $item['icon_thumb']);
            $data['icon_thumb'] = $this->processUploadFile($data['icon_thumb']);
        } 
        // dd($data['thumbnail']);
        // if ($data['icon_thumb'] == null) {
        //     $data['icon_thumb'] = $item['icon_thumb'];
        // } else {
        //     Storage::delete('public/uploads_Product/' . $item['icon_thumb']);
        //     $data['icon_thumb'] = $this->processUploadFile($data['icon_thumb']);
        // }
        // dd($data);
        $item->update($data);
        return redirect()->back();
    }

    public function deleteMenuItem($id, $key, $in = '')
    {
        $menuitem = Menu_item::findOrFail($id);
        $menu = Menu_system::where('id', $menuitem->menu_id)->first();
        if ($menu->content != '') {
            $data = json_decode($menu->content, true);
            $maindata = $data[0];
            if ($in == '') {
                unset($data[0][$key]);
                $newdata = json_encode($data);
                $menu->update(['content' => $newdata]);
            } else {
                unset($data[0][$key]['children'][0][$in]);
                $newdata = json_encode($data);
                $menu->update(['content' => $newdata]);
            }
        }
        $menuitem->delete();
        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        Menu_item::where('menu_id', $request->id)->delete();
        Menu_system::findOrFail($request->id)->delete();
        return redirect()->route('manage-menus')->with('success', 'Menu deleted successfully');
    }
    public function processUploadFile($fileName)
    {
        try {
            $ext = $fileName->getClientOriginalExtension();

            $extension = [
                'jpg', 'png', 'jpeg'
            ];
            $time_img =  Carbon::now();
            if (!in_array($ext, $extension)) return false;

            $filename = str_replace($ext, '', $fileName->getClientOriginalName());
            $filename = Str::slug($filename) . '-' . $time_img->getTimestamp() . '.' . $ext;
            $path = public_path() . '/storage/uploads_Product/';

            if (!\File::exists($path)) mkdir($path, 0777, true);

            $fileName->move($path, $filename);

            return  $filename;
        } catch (\Exception $exception) {
            Log::error("[processUploadFile] :" . $exception->getMessage());
        }

        return  null;
    }
}
