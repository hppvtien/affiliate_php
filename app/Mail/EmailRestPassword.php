<?php

namespace App\Mail;
use Session;
use Locale;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailRestPassword extends Mailable
{
    use Queueable, SerializesModels;
    public $users;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($users, $data)
    {
        $this->users = $users;
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
        return $this->markdown('email.auth.emailRestPass')->subject($lang_code == 'en' ? 'Unimail sends password change information':'Unimail gửi thông tin thay đổi mật khẩu')->with(['users' =>$this->users, 'data' =>$this->data]);
    }
}
