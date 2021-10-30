<?php

namespace App\Mail;
use Session;
use Locale;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailVerificationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        return $this->markdown('email.auth.email')->subject( $lang_code == 'en' ? 'Unimail sends account confirmation information':'Unimail gửi thông tin xác nhận tài khoản')->with(['data' =>$this->data]);
    }
}
