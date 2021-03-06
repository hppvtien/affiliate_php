<?php

namespace Modules\User\Http\Controllers;

use App\Models\Cart\Transaction;
use App\Http\Controllers\Controller;
use App\Models\Uni_Product;
use App\Models\Uni_Category;
use App\Models\Uni_Store;
use App\Models\Cart\Uni_Order;
use Illuminate\Http\Request;
use App\Models\Product_Category;
use DB;
use Psy\Util\Str;
use Sentry;
use Session;
use Locale;
use Mail;
use App\Mail\UserOrderDelete;
use App\Models\Favourite;
use App\Models\Uni_FlashSale;
use Carbon\Carbon;
use App\Models\Cart\Uni_Order_Nap;

// use Illuminate\Routing\Controller;
class UserDashboardController extends Controller
{
    // public function changeLanguage($language)
    // {
        // \Session::put('website_language', $language);
        // $str = URL::previous();
        // $route_lang = app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getActionName();
        // $part = explode('/',$str);
       
        // $arr_route = \Lang::get('route_t.'.$part[3]);
        
        // if($part[3] == ''){
        //     $part[2] = $part[2].'/'.$language;
        //     $url = implode('/',$part);
        // } elseif (in_array($part[3], config('app.locales'))) {
        //     $key_url=array_keys($arr_route,$part[4],true);
        //     $part[4] = \Lang::get('route_t.'.$language.'.'.$key_url[0]);
        //     $part[3] = $language;
        //     $url = implode('/',$part);
            
        // } elseif(isset($lang) && in_array($part[3], config('app.locales')) == false) {
        //     $part[2] = $part[2].'/'.$lang;
        //     $url = implode('/',$part);
        // } else {
        //     foreach($arr_route as $valk){
        //         $key_url=array_keys($valk,$part[4],true);
        //         if($key_url){
        //             $part[4]=\Lang::get(__('route_t.'.$language.'.'.$key_url[0]));
        //         }
        //     }
        //     $part[2] = $part[2].'/'.$language;
        //     $url = implode('/',$part);  
        // }  
        // // dd($part[4]);
        // // dd(action('Frontend\CategoryController@index','profile'));
        // return redirect($url);

    //     \Session::put('website_language', $language);
    //     return redirect()->back();
    // }
    public function index()
    {
        
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        
        if($lang_code == 'en'){
            \SEOMeta::setTitle('Customer info'); 
        }
        \SEOMeta::setTitle('Th??ng tin kh??ch h??ng');
        $uni_order_nap = Uni_Order_Nap::where('user_id', get_data_user('web'))->where('status', '!=', 5)->first();
        $viewData = [
            'lang_code' => $lang_code,
            'uni_order_nap' => $uni_order_nap,
        ];
        return view('user::pages.dashboard.index', $viewData);
    }

    public function spice_club()
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        \SEOMeta::setTitle('Th??ng tin kh??ch h??ng');
       $uni_order_nap = Uni_Order_Nap::where('user_id', get_data_user('web'))->get();
        $viewData = [
            'lang_code' => $lang_code,
            'uni_order_nap' => $uni_order_nap,
        ];
        return view('user::pages.dashboard.index_spice_club', $viewData);
    }

    public function listOrder()
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        \SEOMeta::setTitle('Danh s??ch ????n h??ng');
        $user_id = get_data_user('web');
        $uni_order = Uni_Order::where('user_id', $user_id)->orderBy('id', 'desc')->get();
        $viewData = [
            'uni_order' => $uni_order,
            'lang_code' => $lang_code,
        ];
        return view('user::pages.dashboard.list_order', $viewData);
    }

    public function productlist_filter(Request $request)
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        \SEOMeta::setTitle('Danh s??ch s???n ph???m');
        $user_id = get_data_user('web');
        if ($request->sort_by) {
            $sort_by = $request->sort_by;
        } else {
            $sort_by = 1;
        }
        if ($request->order_by) {
            $order_by = $request->order_by;
        } else {
            $order_by = 'desc';
        }
        $my_favorites = Favourite::where('f_user_id', '=', $user_id)->pluck('f_id');
        $array_product_cat = Product_Category::where('category_id', '=', $sort_by)->pluck('product_id')->all();
        $product_list = Uni_Product::select('id', 'name', 'slug', 'desscription', 'thumbnail')->whereIn('id', $array_product_cat)->orderBy('id', $order_by)->get();
        $view = view("user::pages.dashboard.product_list_filter", compact('product_list', 'my_favorites','lang_code'))->render();
        return $view;
    }

    public function productlist()
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        \SEOMeta::setTitle('Danh s??ch s???n ph???m y??u th??ch');
        $user_id = get_data_user('web');
        $my_favorites = Favourite::where('f_user_id', '=', $user_id)->pluck('f_id');
        $product_list = Uni_Product::select('id', 'name', 'slug', 'desscription', 'thumbnail')->get();
        $category_product_menu = Uni_Category::select('id', 'name')->reorder('name', 'desc')->get();


        $viewdata = [
            'category_menus' => $category_product_menu,
            'product_list' => $product_list,
            'my_favorites' => $my_favorites,
            'lang_code' => $lang_code,

        ];
        return view('user::pages.dashboard.product_list', $viewdata);
    }

    public function myfavorites()
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        \SEOMeta::setTitle('Danh s??ch s???n ph???m y??u th??ch');
        $user_id = get_data_user('web');
        $my_favorites = Favourite::where('f_user_id', '=', $user_id)->pluck('f_id');
        $product_list = Uni_Product::wherein('id', $my_favorites)->get();
        $category_product_menu = Uni_Category::select('id', 'name')->reorder('name', 'desc')->get();
        $viewdata = [
            'category_menu' => $category_product_menu,
            'product_list' => $product_list,
            'lang_code' => $lang_code,
        ];

        return view('user::pages.dashboard.myfavorites', $viewdata);
    }

    public function myfavorites_filter(Request $request)
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        \SEOMeta::setTitle('Danh s??ch s???n ph???m y??u th??ch');
        if ($request->sort_by) {
            $sort_by = $request->sort_by;
        } else {
            $sort_by = 1;
        }
        if ($request->order_by) {
            $order_by = $request->order_by;
        } else {
            $order_by = 'desc';
        }
        $user_id = auth()->id();
        $my_favorites = Favourite::where('f_user_id', '=', $user_id)->pluck('f_id');
        $array_product_cat = Product_Category::where('category_id', '=', $sort_by)->pluck('product_id')->all();
        $product_list = Uni_Product::select('id', 'name', 'slug', 'desscription', 'thumbnail')->wherein('id', $my_favorites)->wherein('id', $array_product_cat)->orderBy('id', $order_by)->get();
        $view = view("user::pages.dashboard.product_list_filter", compact('product_list', 'my_favorites','lang_code'))->render();
        return $view;
    }

    public function myfavorites_delete(Request $request)
    {
        if ($request->id) {
            $id_del = $request->id;
            $del_id_product = Favourite::where('f_id', $request->id)->where('f_user_id', get_data_user('web'))->delete();
            if ($del_id_product) {
                return '???? B??? Th??ch S???n Ph???m ' . $id_del;
            } else {
                return 'Kh??ng Th??? X??a S???n Ph???m ';
            }
        }
    }

    public function myfavorites_add(Request $request)
    {
        if ($request->id) {
            $product_id = $request->id;
            $user_id = get_data_user('web');
            $favorites_chk = Favourite::where('f_id', $product_id)->where('f_user_id', $user_id)->first();
            if ($favorites_chk != null) {
                $del_id_product = Favourite::where('f_id', $product_id)->where('f_user_id', get_data_user('web'))->delete();
                if ($del_id_product) {
                    $count_fav = count(Favourite::where('f_user_id', $user_id)->get());
                    return response([
                        'status' => 200,
                        'message' => 'delete',
                        'count' => $count_fav
                    ]);
                } else {
                    return 'Kh??ng Th??? X??a S???n Ph???m ';
                }
            } else {
                $param = [

                    'f_user_id' => get_data_user('web'),
                    'f_id' => $product_id,
                    'created_at' => Carbon::now()
                ];
                $favouriteID = Favourite::insertGetId($param);

                if ($favouriteID) {
                    $count_fav = count(Favourite::where('f_user_id', $user_id)->get());
                    return response([
                        'status' => 200,
                        'message' => 'add',
                        'count' => $count_fav
                    ]);
                }
            }
        }
    }

    public function my_flash_sale()
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        \SEOMeta::setTitle('Danh s??ch COMBO');
        $my_flash_sale = Uni_FlashSale::select('name', 'slug', 'desscription', 'price', 'qty', 'thumbnail', 'id', 'content', 'status', 'sale_off')->get();
        $viewData = [
            'my_flash_sale' => $my_flash_sale,
        ];
        return view('user::pages.dashboard.my_flash_sale', $viewData);
    }

    public function get_product_flash_sale(Request $request)
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        \SEOMeta::setTitle('Danh s??ch COMBO');
        if ($request->get_id) {
            $get_id = $request->get_id;
            $get_data_id = Uni_FlashSale::select('info_sale')->where('id', '=', $get_id)->get();
        }

        if ($request->get_total_price) {
            $get_total_price = $request->get_total_price;
        } else {
            $get_total_price = 1000000;
        }

        foreach ($get_data_id as $vl) {
            $get_result_arr = json_decode($vl->info_sale, true);
        }
        $view = view("user::pages.dashboard.my_flash_sale_product", compact('get_result_arr', 'get_total_price'))->render();
        return $view;
    }
    // X??a ????n abc jav
    public function delete_order(Request $request)
    {
        $uni_order = Uni_Order::where('id', $request->data_id)->first();
            $storle['status'] = 3;
            $uni_order->fill($storle)->save();
        if($uni_order){
            Mail::to($uni_order['email'])->cc(['info@unimall.vn','tlead01@gmail.com'])->send(new UserOrderDelete($uni_order));
        }
    }
}
