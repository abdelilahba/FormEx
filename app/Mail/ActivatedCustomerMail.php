<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ActivatedCustomerMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
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
        return $this->markdown('emails.ActivatedCustomer')
            ->from('support@khabirak.tech', 'Khabirak') // Specify the "from" address and name
            ->subject(' طلب نسخة تجريبية')
            ->with([
                'link' => $this->link,
            ]);
    }
}
