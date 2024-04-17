<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ValidatedCustomerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $customer;

    /**
     * Create a new message instance.
     *
     * @param mixed $customer The customer information
     */
    public function __construct($customer)
    {
        $this->customer = $customer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.validated_customer')
            ->from('Khabirak') // Specify the "from" address and name
            ->subject('تفعيل حسابك في Khabirak')
            ->with([
                'customer' => $this->customer,
            ]);
    }
}
