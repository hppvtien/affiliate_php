<?php

namespace App\Http\Controllers\Frontend;
use Session;
use Locale;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    public function index()
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        \SEOMeta::setTitle(getDataByLang($lang_code,'Đăng nhập','Login'));
        return view('pages.login.index');
    }
    public function login(LoginRequest $request)
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        if ($request->ajax()) {
            $credentials = $request->only('email', 'password');
            $user = User::where('email', $credentials['email'])->first();
            if($user) {    
                if ($user->email_verified_at) {
                    if (\Auth::attempt($credentials)) {
                        if ($request->ajax()) {
                            return response([
                                'status'     => 200,
                                'message' => $lang_code == 'en' ? 'Successful login.' : 'Bạn đã đăng nhập thành công.'
                            ]);
                        }
                        return redirect()->route('get_user.dashboard');
                     }
                     return response([
                        'status' => 404,
                        'message' => $lang_code == 'en' ? 'Password is not correct!' : 'Mật khẩu chưa chính xác!'
                    ]);
                } 
                return response([
                    'status' => 404,
                    'message' => $lang_code == 'en' ? 'You have not confirmed the Email!' : 'Bạn chưa xác nhận Email!'
                ]);
            }else{
                return response([
                    'status' => 404,
                    'message' => $lang_code == 'en' ? 'Email does not exist!' : 'Email không tồn tại!'
                ]);
            }         
        }
        return redirect()->route('get.home');
    }
}
