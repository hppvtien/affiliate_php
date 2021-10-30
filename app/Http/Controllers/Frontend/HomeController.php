<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
// use App\Http\Controllers\Frontend\CategoryController;
use Session;
use Locale;
use App\Models\Product_Trade;
use App\Models\Uni_Store;
use App\Models\System\Slide;
use App\Models\Uni_Product;
use App\Models\Uni_Category;
use Carbon\Carbon;
use App\Models\Uni_Trade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Models\Page;
use App\Models\Content_Page;
use App\Models\Blog\Uni_Post;
use App\Models\Cart\Uni_Order_Nap;
use JetBrains\PhpStorm\Language;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class HomeController extends Controller
{
    public function index()
    {
        
        return view('pages.home.home');
    }
    public function product_trade(Request $request)
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        $trade_id = $request->id_trade;
        $product_trade = Product_Trade::where('trade_id', $trade_id)
            ->pluck('product_id');
        $product = Uni_Product::whereIn('id', $product_trade)
            ->orderBy('id', 'asc')
            ->get();
            $viewData = [
                'product'=>$product,
                'lang_code'=>$lang_code,
            ];
        $html = view('pages.home.product_trade', compact('product'))->render();
        return $html;
    }

    public function BaoMat(Request $request ,$language){
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        $page_chinh_sach = Page::where('p_style','chinh-sach-bao-mat')->first();
        $viewData=[
            'lang_code'=>$lang_code,
            'page_chinh_sach'=>$page_chinh_sach,
        ];

        return view('pages.home.chinh_sach', $viewData);
    }

}
