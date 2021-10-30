<?php

namespace App\Http\Controllers\Frontend;

use Session;
use Locale;
use App\Http\Controllers\Controller;
use App\Models\Uni_Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Models\Page;

class FindStoreController extends Controller
{
    public function index(Request $request)
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        $uni_store = Uni_Store::get();
        $segments = $request->segments();
        $segments[0] = '/'.$lang_code;
        $segments[1] = trans('routes.findstore');
        $url_seo = implode('/', $segments);
        \SEOMeta::setTitle(getDataByLang($lang_code,'Tìm kiếm cửa hàng của chúng tôi','Search our store'));
        \SEOMeta::setDescription(getDataByLang($lang_code,'Tìm kiếm cửa hàng của chúng tôi','Search our store'));
        \SEOMeta::setCanonical($url_seo);
        \OpenGraph::setDescription(getDataByLang($lang_code,'Tìm kiếm cửa hàng của chúng tôi','Search our store'));
        \OpenGraph::setTitle(getDataByLang($lang_code,'Tìm kiếm cửa hàng của chúng tôi','Search our store'));
        \OpenGraph::setUrl($url_seo);
        \OpenGraph::addProperty('type', 'articles');
        
        $uni_province = Uni_Store::groupByRaw('store_province')->pluck('store_province');
        $view_data=[
            'uni_store'=>$uni_store,
            'uni_province'=>$uni_province,
            'lang_code'=>$lang_code
        ];
        return view('pages.find.index',$view_data);
    }
    public function searchName(Request $request)
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        $store_name = $request->store_name;
        $store_province = $request->store_province;
        if($store_name){
            $uni_store = Uni_Store::where('store_name', 'LIKE', "%{$store_name}%")->get();
        } elseif($store_province) {
            $uni_store = Uni_Store::where('store_province',$store_province)->get();
        } else  {
            $uni_store = Uni_Store::get();
        }
        $viewData = [
            $uni_store => 'uni_store',
            $lang_code => 'lang_code',
        ];
        $html = view('pages.find.list_store', $viewData)->render();
        return $html;
    }
}
