<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog\Uni_PostCategory;
use App\Models\Blog\Uni_Post;
use App\Models\System\Slide;
use App\Models\Blog\PostCategory;
use App\Models\Education\Tag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Session;
use Locale;
use Carbon\Carbon;
use Illuminate\Support\Facades\URL;

class BlogHomeController extends Controller
{
    public function index($language)
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));

        \SEOMeta::setTitle('Tin tức');
        \SEOMeta::setDescription('Tin tức');
        \SEOMeta::setCanonical(\Request::url());
        \OpenGraph::setDescription('Tin tức');
        \OpenGraph::setTitle('Tin tức');
        \OpenGraph::setUrl(\Request::url());
        \OpenGraph::addProperty('type', 'articles');
        // Bài viết banner
        $post_category = Uni_PostCategory::where('status',1)->orderByDesc('id')->get();
        $slide = Slide::where('s_type',6)->first();
        $blog_post = Uni_Post::where('status',1)->orderByDesc('id')->limit(8)->get();
        $viewData = [
            'post_category' => $post_category,
            'blog_post' => $blog_post,
            'lang_code' => $lang_code,
            'slide' => $slide
        ];
        
        return view('pages.blog.index', $viewData);
    }
    public function fillter_post(Request $request,$language)
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));

        $data_slug = $request->data_slug_cat;
        if ($request->data_slug_cat) {
            $data_slug = $request->data_slug_cat;
            $cat_id = Uni_PostCategory::where('slug', $data_slug)->pluck('id')->first();
            $blog_post  = Uni_Post::where('category_id', $cat_id)->orderBy('id', 'asc')->limit(8)->get();
           
        } 
        $viewData=[
            'blog_post' => $blog_post,
            'lang_code' => $lang_code
        ];
        $html = view('pages.blog._item_post', $viewData)->render();
        return $html;
    }
    public function SingleBlog($language,$slug)
    {   
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        $slug_vi =  Uni_Post::where('slug', $slug)->pluck('slug')->first();
        $slug_en =  Uni_Post::where('slug_en', $slug)->pluck('slug_en')->first();
        if($slug_vi != null){
            $blog_id = Uni_Post::where('slug', $slug_vi)->pluck('id')->first();
        } elseif($slug_en != null) {
            $blog_id = Uni_Post::where('slug_en', $slug_en)->pluck('id')->first();
        }
        $post_category = Uni_PostCategory::where('status',1)->orderByDesc('id')->get();
        $slide = Slide::where('s_type',7)->first();
        $blog_post = Uni_Post::where('id',$blog_id)->first();
        // dd($blog_post);
        $blog_post_cat = Uni_Post::where('id',$blog_id)->orderByDesc('id')->pluck('category_id')->first();
        $blog_post1 = Uni_Post::where('category_id',$blog_post_cat)->orderByDesc('id')->limit(8)->get();
        $user_ids = get_data_user('web');

        $current_cate = Uni_PostCategory::where('id',$blog_post->category_id)->first();

        \SEOMeta::setTitle($blog_post->meta_title);
        \SEOMeta::setDescription($blog_post->meta_desscription);
        \SEOMeta::setCanonical(getSlugPost(getDataByLang($lang_code,$blog_post->slug,$blog_post->slug_en)));
        \OpenGraph::setDescription($blog_post->meta_desscription);
        \OpenGraph::setTitle($blog_post->meta_title);
        \OpenGraph::setUrl(getSlugPost(getDataByLang($lang_code,$blog_post->slug,$blog_post->slug_en)));
        \OpenGraph::addProperty('type', 'articles');
        \OpenGraph::addImage(URL::to('').pare_url_file($blog_post->thumbnail));

        $viewdata = [
            'blog_post'=>$blog_post,
            'blog_post1' => $blog_post1,
            'post_category'=>$post_category,
            'slide' => $slide,
            'current_cate' => $current_cate,
            'blog_post_id' => $blog_post->id,
            'user_ids' => $user_ids,
            'slug' => $slug,
            'lang_code' => $lang_code,
            'blog_post_cat' => $blog_post_cat,
        ];
        return view('pages.blog.single_blog',$viewdata);
    }
    

    public function add_comment_post(Request $request,$language)
    {

        if($request->user_id){
            $type_product = 'blog';
            $id = DB::table('uni_comment')->insertGetId(
                ['user_id' => $request->user_id, 'product_id' => $request->blog_id, 'type_comment' => $type_product, 'noi_dung_comment' => $request->noi_dung_commnet, 'created_at' => Carbon::now(), 'update_at' => NULL]
            );
            return 'Đã thêm bình luận thành công';
        }
        else{
            return 'Lỗi không thể bình luận';
        }
        
    }

    public function SingleCat($language,$slug)
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        $slug_vi =  Uni_PostCategory::where('slug', $slug)->pluck('slug')->first();
        $slug_en =  Uni_PostCategory::where('slug_en', $slug)->pluck('slug_en')->first();
        if($slug_vi != null){
            $cat_id = Uni_PostCategory::where('slug', $slug_vi)->pluck('id')->first();
        } elseif($slug_en != null) {
            $cat_id = Uni_PostCategory::where('slug_en', $slug_en)->pluck('id')->first();
        }

        $post_category = Uni_PostCategory::orderByDesc('id')->get();
        $current_cate = Uni_PostCategory::where('id',$cat_id)->first();
        $blog_post  = Uni_Post::where('category_id', $cat_id)->orderBy('id', 'asc')->limit(8)->get();
        $slide = Slide::where('s_type',6)->first();

        \SEOMeta::setTitle($current_cate->meta_title);
        \SEOMeta::setDescription($current_cate->meta_desscription);
        \SEOMeta::setCanonical(getSlugPostCate(getDataByLang($lang_code,$current_cate->slug,$current_cate->slug_en)));
        \OpenGraph::setDescription($current_cate->meta_desscription);
        \OpenGraph::setTitle($current_cate->meta_title);
        \OpenGraph::setUrl(getSlugPostCate(getDataByLang($lang_code,$current_cate->slug,$current_cate->slug_en)));
        \OpenGraph::addProperty('type', 'articles');
        \OpenGraph::addImage(URL::to('').pare_url_file($current_cate->thumbnail));

        $viewData = [
            'post_category' => $post_category,
            'blog_post' => $blog_post,
            'slide' => $slide,
            'current_cate' => $current_cate,
            'lang_code' => $lang_code
        ];
        
        return view('pages.blog.single_cat', $viewData);
    }
    public function ThoaThuan($language)
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));

        
        $cat_ids = Uni_PostCategory::where('id', 9)->first();
        $blog_posts  = Uni_Post::where('status', 0)->get();
        $viewData = [
            'blog_posts' => $blog_posts,
            'cat_ids' => $cat_ids,
            'lang_code' => $lang_code,
        ];
        return view('pages.blog.thoa_thuan', $viewData);
    }
    public function SinglePolice($language,$slug)
    {   
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));

        $post_category = Uni_PostCategory::where('status',1)->orderByDesc('id')->get();
        $slide = Slide::where('s_type',7)->first();
        if($lang_code == 'en'){
            $blog_post = Uni_Post::where('slug_en',$slug)->first();
            $blog_post_cat = Uni_Post::where('slug_en',$slug)->orderByDesc('id')->pluck('category_id')->first();
        } else {
            $blog_post = Uni_Post::where('slug',$slug)->first();
        $blog_post_cat = Uni_Post::where('slug',$slug)->orderByDesc('id')->pluck('category_id')->first();
        }
        
        $blog_post1 = Uni_Post::where('category_id',$blog_post_cat)->orderByDesc('id')->limit(8)->get();
        $user_ids = get_data_user('web');

        $current_cate = Uni_PostCategory::where('id',$blog_post->category_id)->first();

        \SEOMeta::setTitle(getDataByLang($lang_code,$blog_post->meta_title,$blog_post->meta_title_en));
        \SEOMeta::setDescription(getDataByLang($lang_code,$blog_post->meta_desscription,$blog_post->meta_desscription_en));
        \SEOMeta::setCanonical(\Request::url());
        \OpenGraph::setDescription(getDataByLang($lang_code,$blog_post->meta_desscription,$blog_post->meta_desscription_en));
        \OpenGraph::setTitle(getDataByLang($lang_code,$blog_post->meta_title,$blog_post->meta_title_en));
        \OpenGraph::setUrl(\Request::url());
        \OpenGraph::addProperty('type', 'articles');
        \OpenGraph::addImage(URL::to('').pare_url_file(getDataByLang($lang_code,$blog_post->thumbnail,$blog_post->thumbnail_en)));

        $viewdata = [
            'blog_post'=>$blog_post,
            'blog_post1' => $blog_post1,
            'post_category'=>$post_category,
            'slide' => $slide,
            'current_cate' => $current_cate,
            'blog_post_id' => $blog_post->id,
            'user_ids' => $user_ids,
            'slug' => $slug,
            'blog_post_cat' => $blog_post_cat,
            'lang_code' => $lang_code,
        ];
        return view('pages.blog.single_blog',$viewdata);
    }

}
