<?php

namespace App\Providers;
use Session;
use App\Models\Blog\Menu;
use App\Models\Uni_Category;
use App\Models\Menu_system;
use App\Models\Menu_item;
use App\Models\Configuration;
use Illuminate\Http\Request;
use App\Models\Education\Tag;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        Paginator::useBootstrap();
        Schema::defaultStringLength(191);
        try {
            $configuration = Configuration::first();
            $category_mn = Uni_Category::orderBy('order', 'asc')->where('status',1)->where('parent_id','=',0)->get();
            $desiredMenu = Menu_system::where('id', 1)->first();
            $menuitems = json_decode($desiredMenu->content);

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
                            $child->target = Menu_item::where('id', $child->id)->value('target');
                            $child->type = Menu_item::where('id', $child->id)->value('type');
                        }
                    }
                }
            } else {
                $menuitems = Menu_item::where('menu_id', $desiredMenu->id)->get();
            }


            // $menu_top = $menu_top[0];
            // $menu_top = Menu_item::where('menu_id', 4)->get();
            $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
         
        } catch (\Exception $exception) {

        }

        \View::share('configuration', $configuration ?? []);
        \View::share('category_mn', $category_mn ?? 1);
        \View::share('menuitems', $menuitems ?? 1);
        \View::share('lang_code', $lang_code ?? 'vi');
    }
}
