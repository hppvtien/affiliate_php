<?php

namespace App\Mail;
use Session;
use Locale;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailDangKySpiceClub extends Mailable
{
    use Queueable, SerializesModels;
    public $userss;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userss)
    {
        $this->userss = $userss; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        return $this->markdown('email.auth.email_dang_ky_spice_club')->subject($lang_code == 'en' ? 'UniMall sends Spice Club registration information':'UniMall gửi thông tin đăng ký Spice Club')->with(['userss' =>$this->userss]);
    }
}
