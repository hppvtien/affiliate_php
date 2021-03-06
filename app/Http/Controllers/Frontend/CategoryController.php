<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Session;
use Locale;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use App\Models\Uni_Category;
use App\Models\Uni_Trade;
use App\Models\Uni_Product;
use App\Models\Page;
use App\Models\Product_Category;
use App\Models\Product_Trade;
use App\Models\Uni_Comment;
use App\Models\System\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class CategoryController extends Controller
{
    public function index($language,$slug)
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        $slug_vi =  Uni_Category::where('slug', $slug)->pluck('slug')->first();
        $slug_en =  Uni_Category::where('slug_en', $slug)->pluck('slug_en')->first();
        if($slug_vi != null){
            $cat_id = Uni_Category::where('slug', $slug_vi)->pluck('id')->first();
        } elseif($slug_en != null) {
            $cat_id = Uni_Category::where('slug_en', $slug_en)->pluck('id')->first();
        }
        $category = Uni_Category::where('id', $cat_id)->first();
        $banner = Slide::where('s_type', 8)->first();
        $trade = Uni_Trade::get();
        $categories = Uni_Category::get();
        $group_id_product = Product_Category::where('category_id', $cat_id)->pluck('product_id');
        $product = Uni_Product::whereIn('id', $group_id_product)->orderBy('id', 'asc')->paginate(12);
        $product_rel = Uni_Product::whereIn('id', $group_id_product)->where('is_hot',1)->orderBy('id', 'asc')->limit(12)->get();
        $grp_id_cmt = Uni_Comment::where('star', '>', 4)->where('status', 1)->pluck('product_id');
        $product_hotreview = Uni_Product::whereIn('id', $grp_id_cmt)->orderBy('id', 'asc')->limit(12)->get();
        $count_product = count($group_id_product);
       
        \SEOMeta::setTitle(getDataByLang($lang_code,$category->meta_title,$category->meta_title_en));
        \SEOMeta::setDescription(getDataByLang($lang_code,$category->meta_desscription,$category->meta_desscription_en));
        \SEOMeta::setCanonical(getSlugCategory(getDataByLang($lang_code,$category->slug,$category->slug_en)));
        \OpenGraph::setDescription(getDataByLang($lang_code,$category->meta_desscription,$category->meta_desscription_en));
        \OpenGraph::setTitle(getDataByLang($lang_code,$category->meta_title,$category->meta_title_en));
        \OpenGraph::setUrl(getSlugCategory(getDataByLang($lang_code,$category->slug,$category->slug_en)));
        \OpenGraph::addProperty('type', 'articles');
        \OpenGraph::addImage(URL::to('').pare_url_file($category->thumbnail));
        
        $uid = get_data_user('web');
        $viewdata = [
            'category' => $category,
            'product_hotreview' => $product_hotreview,
            'product' => $product,
            'product_rel' => $product_rel,
            'count_product' => $count_product,
            'trade' => $trade,
            'categories' => $categories,
            'lang_code' => $lang_code,
            'uid' => $uid,
            'banner' => $banner,
        ];
        return view('pages.category.index', $viewdata);
    }
    public function all_product()
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        $banner = Slide::where('s_type', 8)->first();
        $page = Page::where('p_slug','tat-ca-san-pham.html')->first();
        $trade = Uni_Trade::get();
        $categories = Uni_Category::where('parent_id',0)->where('status',1)->get();
        $product = Uni_Product::orderBy('id', 'asc')->paginate(12);
        $product_rel = Uni_Product::where('is_hot',1)->orderBy('id', 'asc')->limit(12)->get();
        $grp_id_cmt = Uni_Comment::where('star', '>', 4)->where('status', 1)->pluck('product_id');
        $product_hotreview = Uni_Product::whereIn('id', $grp_id_cmt)->orderBy('id', 'asc')->limit(12)->get();

        $slug_en = '';
        $slug_vi = '';
        $uid = get_data_user('web');
        $viewdata = [
            'product_hotreview' => $product_hotreview,
            'product' => $product,
            'product_rel' => $product_rel,
            'page' => $page,
            'trade' => $trade,
            'categories' => $categories,
            'lang_code' => $lang_code,
            'uid' => $uid,
            'banner' => $banner,
            'slug_en' => $slug_en,
            'slug_vi' => $slug_vi,
        ];
        return view('pages.category.all_product', $viewdata);
    }
    public function trade_mark($language,$slug)
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        $banner = Slide::where('s_type', 8)->first();
        $slug_vi =  Uni_Trade::where('slug', $slug)->pluck('slug')->first();
        $slug_en =  Uni_Trade::where('slug_en', $slug)->pluck('slug_en')->first();
        if($slug_vi != null){
            $trade_id = Uni_Trade::where('slug', $slug_vi)->pluck('id')->first();
        } elseif($slug_en != null) {
            $trade_id = Uni_Trade::where('slug_en', $slug_en)->pluck('id')->first();
        }
        $trade_current = Uni_Trade::where('id', $trade_id)->first();
        $trade = Uni_Trade::get();
        $categories = Uni_Category::get();
        $group_id_product = Product_Trade::where('trade_id', $trade_id)->pluck('product_id');
        $product = Uni_Product::whereIn('id', $group_id_product)->orderBy('id', 'asc')->get();
        $product_rel = Uni_Product::where('is_hot',1)->orderBy('id', 'asc')->limit(12)->get();
        $grp_id_cmt = Uni_Comment::where('star', '>', 4)->where('status', 1)->pluck('product_id');
        $product_hotreview = Uni_Product::whereIn('id', $grp_id_cmt)->orderBy('id', 'asc')->limit(12)->get();
        $count_product = count($group_id_product);
        \SEOMeta::setTitle($trade_current->meta_title);
        \SEOMeta::setDescription($trade_current->meta_desscription);
        \SEOMeta::setCanonical(getSlugTrade(getDataByLang($lang_code,$trade_current->slug,$trade_current->slug_en)));
        \OpenGraph::setDescription($trade_current->meta_desscription);
        \OpenGraph::setTitle($trade_current->meta_title);
        \OpenGraph::setUrl(getSlugTrade(getDataByLang($lang_code,$trade_current->slug,$trade_current->slug_en)));
        \OpenGraph::addProperty('type', 'articles');
        \OpenGraph::addImage(URL::to('').pare_url_file($trade_current->thumbnail));
        
        $uid = get_data_user('web');
        $viewdata = [
            'trade_current' => $trade_current,
            'product_hotreview' => $product_hotreview,
            'product' => $product,
            'product_rel' => $product_rel,
            'count_product' => $count_product,
            'trade' => $trade,
            'categories' => $categories,
            'lang_code' => $lang_code,
            'uid' => $uid,
            'banner' => $banner,
        ];
        return view('pages.category.trade_mark', $viewdata);
    }
    public function fillter_product(Request $request)
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        $data_slug = $request->data_slug_trade;
        $data_slug = $request->data_slug_cat;
        $data_sort = $request->data_sort;
        $data_order = $request->data_order;
        $uid = get_data_user('web');
        if ($request->data_slug_trade) {
            $data_slug = $request->data_slug_trade;

        
            $trade_id = Uni_Trade::where('slug', $data_slug)->pluck('id')->first();
            $group_id_product = Product_Trade::where('trade_id', $trade_id)->pluck('product_id');
            $product  = Uni_Product::whereIn('id', $group_id_product)->orderBy($data_sort, $data_order)->limit(12)->get();
            $viewdata = [
                'product' => $product,
                'uid' => $uid,
                'lang_code' => $lang_code,
            ];
            $html = view('pages.category._item_product', $viewdata)->render();
        } elseif ($request->data_slug_cat) {
            $data_slug = $request->data_slug_cat;
            $cat_id = Uni_Category::where('slug', $data_slug)->pluck('id')->first();
            $group_id_product = Product_Category::where('category_id', $cat_id)->pluck('product_id');
            $product  = Uni_Product::whereIn('id', $group_id_product)->orderBy($data_sort, $data_order)->limit(12)->get();
            $viewdata = [
                'product' => $product,
                'uid' => $uid,
                'lang_code' => $lang_code
            ];
            $html = view('pages.category._item_product', $viewdata)->render();
        } else {
            $html = '<p>S???n ph???m b???n v???a ch???n hi???n ??ang c???p nh???t</p>';
        }
        return $html;
    }
}
