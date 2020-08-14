<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    //use Queueable, SerializesModels;
    protected $name;
    protected $email;
    //protected $subject;
    protected $message;

    /**
     * SendMail constructor.
     * @param $name
     * @param $email
     * @param $subject
     * @param $message
     */
    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $resp['name'] = $this->name;
        $resp['email'] = $this->email;
        $resp['message'] = $this->message;

        return $this->view('mail.send_mail', compact('resp'));
    }
}
