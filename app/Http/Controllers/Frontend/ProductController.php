<?php

namespace App\Http\Controllers\Frontend;

use Session;
use Locale;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Uni_Product;
use App\Models\Product_Category;
use App\Models\Uni_Category;
use App\Models\Product_Trade;
use App\Models\Uni_Trade;
use App\Models\Uni_Size;
use App\Models\Uni_Comment;
use App\Models\Product_Size;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\System\Slide;
use Illuminate\Support\Facades\URL;

class ProductController extends Controller
{
    public function index($language, $slug)
    {
        $lang_code = Session::get('website_language') == null ? 'vi' : Session::get('website_language');
        $slug_vi =  Uni_Product::where('slug', $slug)->pluck('slug')->first();
        $slug_en =  Uni_Product::where('slug_en', $slug)->pluck('slug_en')->first();
        if($slug_vi != null){
            $id_product = Uni_Product::where('slug', $slug_vi)->pluck('id')->first();
        } elseif($slug_en != null) {
            $id_product = Uni_Product::where('slug_en', $slug_en)->pluck('id')->first();
        }
        $product = Uni_Product::where('id', $id_product)->first();
        $noi_dung_comment = Uni_Comment::where('product_id', '=', $id_product)->where('type_comment', 'product')->where('status', 1)->where('type', 'review')->get();
        $noi_dung_question = Uni_Comment::where('product_id', '=', $id_product)->where('type_comment', 'product')->where('status', 1)->where('type', 'question')->get();
        
        \SEOMeta::setTitle(getDataByLang($lang_code,$product->meta_title,$product->meta_title_en));
        \SEOMeta::setDescription(getDataByLang($lang_code,$product->meta_desscription,$product->meta_desscription_en));
        \SEOMeta::setCanonical(getSlugProduct(getDataByLang($lang_code,$product->slug,$product->slug_en)));
        \OpenGraph::setDescription(getDataByLang($lang_code,$product->meta_desscription,$product->meta_desscription_en));
        \OpenGraph::setTitle(getDataByLang($lang_code,$product->meta_title,$product->meta_title_en));
        \OpenGraph::setUrl(getSlugProduct(getDataByLang($lang_code,$product->slug,$product->slug_en)));
        \OpenGraph::addProperty('type', 'articles');
        \OpenGraph::addImage(URL::to('').pare_url_file($product->thumbnail));
        $trade_id = Product_Trade::where('product_id', $id_product)->pluck('trade_id')->first();
        
        $size_id = Product_Size::where('product_id', $id_product)->pluck('size_id')->first();
        $cat_grid = Product_Category::where('product_id', $id_product)->pluck('category_id');
        $cat_id = Uni_Category::whereIn('id', $cat_grid)->where('parent_id', 0)->pluck('id')->first();
        // dd($cat_id);
        $cat_data = Uni_Category::where('id', $cat_id)->first();
        // dd($cat_data);
        $grp_id = Product_Category::where('category_id', $cat_id)->pluck('product_id');
        $trade_name = Uni_Trade::where('id', $trade_id)->first();
        
        $size_name = Uni_Size::where('id', $size_id)->first(); 

        $product_related = Uni_Product::whereIn('id', $grp_id)->where('status', 1)->orderBy('id', 'asc')->get();
        $grp_id_cmt = Uni_Comment::where('star', '>', 4)->where('status', 1)->pluck('product_id');
        $product_fav = Uni_Product::whereIn('id', $grp_id_cmt)->where('status', 1)->orderBy('id', 'asc')->limit(8)->get();
        $slides_home_four1 = Slide::where('s_type', 9)->first();
        $count_bl = Uni_Comment::where('product_id', '=', $id_product)->where('type', '=', 'review')->get();
        $count_bl1 = $count_bl->count();
        $count_ch = Uni_Comment::where('product_id', '=', $id_product)->where('type', '=', 'question')->get();
        $count_ch1 = $count_ch->count();
        $data_size_product = collect(Product_Size::where('product_id', $id_product)->get())->sortByDesc('price')->reverse()->toArray();
        $product['size_product'] = $data_size_product;
        $viewdata = [
            'product' => $product,
            'lang_code' => $lang_code,
            'cat_data' => $cat_data,
            'trade_name' => $trade_name,
            'product_related' => $product_related,
            'noi_dung_comment' => $noi_dung_comment,
            'noi_dung_question' => $noi_dung_question,
            'slug' => $slug,
            'product_fav' => $product_fav,
            'slides_home_four1' => $slides_home_four1,
            'count_bl1' => $count_bl1,
            'count_ch1' => $count_ch1,
            'size_name' => $size_name
        ];
        return view('pages.product.index', $viewdata);
    }

    public function thembinhluan(Request $request)
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        $type_product = 'product';
        $data = [
            'user_id' => $request->user_id != null ? $request->user_id : 0,
            'product_id' => $request->product_id,
            'type_comment' => $type_product,
            'title' => $request->title_question,
            'star' => $request->ratingValue == null ? 5 : $request->ratingValue,
            'name' => $request->name_question,
            'phone' => $request->phone_question,
            'email' => $request->email_question,
            'type' => $request->type_question,
            'noi_dung_comment' => $request->noi_dung_comment != null ? $request->noi_dung_comment : '',
            'noi_dung_question' => $request->noi_dung_question != null ? $request->noi_dung_question : '',
            'created_at' => Carbon::now()
        ];
        $id = Uni_Comment::insertGetId($data);
        if ($id) {
            if($lang_code == 'en'){
                $this->showMessagesSuccess('Comment success');
            } else {
                $this->showMessagesSuccess('Đã gửi bình luận thành công');
            }
            
        } else {
            if($lang_code == 'en'){
                $this->showMessagesError('Comment error');
            } else {
                $this->showMessagesSuccess('Đã gửi bình luận thất bại');
            }
        }
    }
    public function showMessagesSuccess($message = 'Thêm mới thành công')
    {
        return \Session::flash('toastr', [
            'type' => 'success',
            'message' => $message
        ]);
    }
    public function showMessagesError($message)
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        $message = $lang_code == 'en' ? 'Data processing failed' : 'Xử lý dữ liệu thất bại';
        return \Session::flash('toastr', [
            'type' => 'error',
            'message' => $message
        ]);
    }
}
