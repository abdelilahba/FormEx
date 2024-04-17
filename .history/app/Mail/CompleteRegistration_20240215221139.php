<?php

namespace App\Mail;

use App\Models\Customer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CompleteRegistration extends Mailable
{
    use Queueable, SerializesModels;

    public $customer;
    public $link;

    public function __construct($customer, $link)
    {
        $this->customer = $customer;
        $this->link = $link;
    }

    public function build()
    {
        return $this->markdown('emails.completeRegistration')
            ->from('support@khabirak.tech', 'Khabirak') // Specify the "from" address and name
            ->subject(' Complétez Votre Inscription')
            ->with([
                'link' => $this->link,
            ]);
    }
}
