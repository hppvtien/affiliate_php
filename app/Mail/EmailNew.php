<?php

namespace App\Mail;
use Session;
use Locale;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailNew extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    public function __construct($data)
    {
        $this->data = $data; 
    }

    public function build()
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        return $this->markdown('email.auth.email_new')->subject($lang_code == 'en' ? 'Request to subscribe to UniMall newsletter':'Yêu cầu đăng ký nhận bản tin của UniMall')->with(['data' =>$this->data]);
    }
}
