<?php

namespace App\Http\Controllers\Frontend;

use Session;
use Locale;
use App\Models\Uni_Category;
use App\Http\Controllers\Controller;
use App\Models\Uni_Contact;
use Illuminate\Http\Request;
use DB;
use Mail;
use Carbon\Carbon;
use App\Mail\EmailNew;
use App\Mail\EmailConTact;
use Illuminate\Support\Str;
use Modules\Admin\Http\Requests\AdminContactRequest;

class Uni_ContactController extends Controller
{
    public function index()
    {
        $lang_code = Session::get('website_language') == null ? 'vi' : Session::get('website_language');
        \SEOMeta::setTitle(getDataByLang($lang_code,'Liên hệ','Contact'));
        $array_subject = [
            '1' => trans('title.product_inquiry'),
            '2' => trans('title.order_related'),
            '3' => trans('title.user_account'),
            '4' => trans('title.development_cooperation'),
            '5' => trans('title.other_topics'),
        ];

        $menu = Uni_Category::select('name', 'slug')->get();
        $menu1 = array();
        foreach ($menu as $l) {

            $menu1[] = $l;
        }
        $viewdata = [
            'subject' => $array_subject,
            'menu1' => $menu1,
            'lang_code' => $lang_code,
        ];
        return view('pages.contact.index', $viewdata);
    }

    public function submitContact(Request $request)
    {
        $lang_code = Session::get('website_language') == null ? 'vi' : Session::get('website_language');
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message,
            "created_at" =>  Carbon::now(),
            "updated_at" => null,
        ];
     
        $id = Uni_Contact::insertGetId($data);
        if ($id) {
            $data['lang_code'] = $lang_code;
            Mail::to('info@unimall.vn')->send(new EmailConTact($data));
            if($lang_code == 'en'){
                return response()->json([
                    'status' => 200,
                    'message' => 'You have successfully submitted!'
                ]);
            } else {
                return response()->json([
                    'status' => 200,
                    'message' => 'Bạn đã gửi thành công!'
                ]);
            }
        }
    }
    public function getNewsLetters(Request $request)
    {
        $lang_code = Session::get('website_language') == null ? 'vi' : Session::get('website_language');
        if ($request->user_email) {
            $data_contact = Uni_Contact::where('email', $request->user_email)->where('is_newsletter', 1)->first();
            if ($data_contact != null) {
                return response()->json([
                    'status' => 202,
                    'message' => $lang_code == 'en' ? 'Email already exists in the system' : 'Email đã tồn tại trong hệ thống'
                ]);
            } else {
                $data = [
                    'name' => 'Yêu cầu Newsletters',
                    'email' => $request->user_email,
                    'phone' => 0000000000,
                    'message' => 'Yêu cầu Newsletters',
                    "created_at" =>  Carbon::Now(),
                    "is_newsletter" => 1,
                    'code_verication' => Str::random(40)
                ];
            }
            $id = Uni_Contact::insertGetId($data);
           
            if ($id) {
                $data['lang_code'] = $lang_code;
            Mail::to($request->user_email)->send(new EmailNew($data));
                if($lang_code == 'en'){
                    return response()->json([
                        'status' => 200,
                        'message' => 'The system has received your email, please confirm the email to complete the newsletter subscription.'
                    ]);
                } else {
                    return response()->json([
                        'status' => 200,
                        'message' => 'Hệ thống đã nhận được email của bạn, hãy xác nhận email để hoàn tất đăng ký nhận bản tin.'
                    ]);
                }
               
            }
        }
    }

    public function verify_email_new($code_verication)
    {
        $user = Uni_Contact::where('code_verication', $code_verication)->first();
        if (!$user) {
            $this->showEmailError();
            return redirect()->route('get.home');
        } else {
            if ($user->email_verified_at) {
                $this->showEmailSuccess();
                return redirect()->route('get.home');
            } else {
                $user->update([
                    'email_verified_at' => \Carbon\Carbon::now()
                ]);
                $this->showEmailSuccess();
                return redirect()->route('get.home');
            }
        }
    }
    public function showEmailError($message)
    {
        $lang_code = Session::get('website_language') == null ? 'vi' : Session::get('website_language');
        if($lang_code == 'en'){
            $message = 'Unconfirmed email';
        } else {
            $message = 'Email chưa được xác nhận';
        }
        return \Session::flash('toastr', [
            'type' => 'error',
            'message' => $message
        ]);
    }
    public function showEmailSuccess($message)
    {
        $lang_code = Session::get('website_language') == null ? 'vi' : Session::get('website_language');
        if($lang_code == 'en'){
            $message = 'Confirm that the email required to register for UniMall is newsletter is successful';
        } else {
            $message = 'Xác nhận Email yêu cầu đăng ký nhận bản tin của UniMall thành công';
        }
        return \Session::flash('toastr', [
            'type' => 'success',
            'message' => $message
        ]);
    }
}
