<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Models\Uni_Category;
use Illuminate\Support\Facades\URL;
use App\Models\Blog\Menu;
use Illuminate\Support\Facades\Session;
use Locale;
use SetLocale;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
    {

    }
    public function changeLanguage($language)
    {
        
        \Session::put('website_language', $language);
        $str = URL::previous();
        $part = explode('/',$str);
        // foreach($part as $item){
            // dd($part);
        // }
        $arr_route = \Lang::get('route_t.'.$part[3]);
        
        if($part[3] == '' || in_array($part[3], config('app.locales'))){
            $part[3] = $language;
            $url = implode('/',$part);
        } elseif (in_array($part[3], config('app.locales')) && isset($part[4])) {
            if($part[4] == 'user'){
                \App::setLocale($language);
                $part[3] = $language;
                $url = implode('/',$part);
            } else {
                $key_url=array_keys($arr_route,$part[4],true);
                $part[4] = \Lang::get('route_t.'.$language.'.'.$key_url[0]);
                $part[3] = $language;
                $url = implode('/',$part);
            } 
        } elseif(isset($lang) && in_array($part[3], config('app.locales')) == false) {
            $part[2] = $part[2].'/'.$lang;
            $url = implode('/',$part);
        } else {
            foreach($arr_route as $valk){
                $key_url=array_keys($valk,$part[4],true);
                if($key_url){
                    $part[4]=\Lang::get(__('route_t.'.$language.'.'.$key_url[0]));
                }
            }
            $part[2] = $part[2].'/'.$language;
            $url = implode('/',$part);  
        }  
        // dd($url);
        // dd($part[4]);
        // dd(action('Frontend\CategoryController@index','profile'));
        return redirect($url);

        // \Session::put('website_language', $language);
        // return redirect()->back();
    }
}
