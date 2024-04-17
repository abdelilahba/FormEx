<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscriptionInfoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function build()
    {
        return $this->view('emails.subscriptionInfo') // ensure you have this view file
                    ->subject('Subscription Information')
                    ->with([
                        'email' => $this->email,
                        'password' => $this->password,
                    ]);
    }
}
