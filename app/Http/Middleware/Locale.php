<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        // $language = \Session::get('website_language', config('app.locale'));
        // // Lấy dữ liệu lưu trong Session, không có thì trả về default lấy trong config
        // \App::setLocale($language);
        // // config(['app.locale' => $language]);

        // // Chuyển ứng dụng sang ngôn ngữ được chọn

        // return $next($request);


        if ($request->method() === 'GET') {
            $segment = $request->segment(1);
            \Session::put('website_language', $segment);
            $segments = $request->segments();
            if (!in_array($segment, config('app.locales'))) {
                $fallback = session('locale') ?: config('app.fallback_locale');
                $segments = Arr::prepend($segments, $fallback);
                
                return redirect()->to(implode('/', $segments));
            }

            session(['locale' => $segment]);
            app()->setLocale($segment);
        }

        return $next($request);
    }
}
