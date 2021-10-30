<?php

namespace App\Mail;
use Session;
use Locale;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailConTact extends Mailable
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
        return $this->markdown('email.auth.email_contact')->subject($lang_code == 'en' ? 'Customer feedback':'Phản hồi khác hàng')->with(['data' =>$this->data]);
    }
}
