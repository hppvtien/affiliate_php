<?php

namespace App\Http\Controllers\Frontend;

use Session;
use Locale;
use App\Http\Controllers\Controller;
use App\Models\Uni_Product;
use App\Models\Blog\Uni_Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $lang_code = Session::get('website_language') == null ? 'vi' : Session::get('website_language');
        \SEOMeta::setTitle(getDataByLang($lang_code,'Tìm kiếm','Search'));
        $search = $request->search;
        if($lang_code == 'en'){
            $product = Uni_Product::where('name_en','like','%'.$search.'%')
            ->where('status', 1)
            ->orderByDesc('id')
            ->limit(20)
            ->get();
        $post = Uni_Post::where('name_en','like','%'.$search.'%')
            ->where('status', 1)
            ->orderByDesc('id')
            ->limit(20)
            ->get();
            $uid = get_data_user('web');
        } else {
            $product = Uni_Product::where('name','like','%'.$search.'%')
            ->where('status', 1)
            ->orderByDesc('id')
            ->limit(20)
            ->get();
        $post = Uni_Post::where('name','like','%'.$search.'%')
            ->where('status', 1)
            ->orderByDesc('id')
            ->limit(20)
            ->get();
            $uid = get_data_user('web');
        }
        
        $viewData=[
            'product'=>$product,
            'post'=>$post,
            'uid'=>$uid,
            'search'=>$search,
            'lang_code'=>$lang_code,
        ];
        return view('pages.search.index', $viewData);
    }
}
