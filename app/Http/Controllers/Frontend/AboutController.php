<?php

namespace App\Http\Controllers\Frontend;

use Session;
use Locale;
use App\Models\Uni_Category;
use App\Models\Content_Page;
use App\Models\Blog\Uni_Post;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use App\Models\Product_Category;




class AboutController extends Controller
{

    public function index(Request $request)
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        $page = Page::where('p_style','about-us')->first();
        $segments = $request->segments();
        $segments[0] = '/'.$lang_code;
        $segments[1] = trans('routes.about_us');
        $url_seo = implode('/', $segments);
        \SEOMeta::setTitle(getDataByLang($lang_code,$page->p_title_seo,$page->p_title_seo_en));
        \SEOMeta::setDescription(getDataByLang($lang_code,$page->p_desscription_seo,$page->p_desscription_seo_en));
        \SEOMeta::setCanonical($url_seo);
        \OpenGraph::setDescription(getDataByLang($lang_code,$page->p_desscription_seo,$page->p_desscription_seo_en));
        \OpenGraph::setTitle(getDataByLang($lang_code,$page->p_title_seo,$page->p_title_seo_en));
        \OpenGraph::setUrl($url_seo);
        \OpenGraph::addProperty('type', 'articles');
        \OpenGraph::addImage(URL::to('').pare_url_file(getDataByLang($lang_code,$page->p_banner,$page->p_banner_en)));

        $menu = Uni_Category::where('parent_id',0)->where('status',1)->get();
        $menu1 = Uni_Category::where('parent_id', '=', 0)->whereNotIn('id', [2,5,8])->get();
        $content_page_1 = Content_Page::where('page_id',$page->id)->where('order',0)->first();
        $content_page_2 = Content_Page::where('page_id',$page->id)->where('order',1)->first();
        $content_page_3 = Content_Page::where('page_id',$page->id)->where('order',2)->first();
        $content_page_4 = Content_Page::where('page_id',$page->id)->where('order',3)->first();
        $content_page_5 = Content_Page::where('page_id',$page->id)->where('order',4)->first();
        $blog_post = Uni_Post::where('status', 1)
        ->orderBy('id', 'asc')
        ->limit(4)->get();
        // dd($content_page_1);
        $viewdata = [
            'page'=>$page,
            'menu' => $menu,
            'menu1' => $menu1,
            'content_page_1' => $content_page_1,
            'content_page_2' => $content_page_2,
            'content_page_3' => $content_page_3,
            'content_page_4' => $content_page_4,
            'content_page_5' => $content_page_5,
            'blog_post' => $blog_post,
            'lang_code' => $lang_code
        ];
        return view('pages.about.index', $viewdata);
    }
}
