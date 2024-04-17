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
                    ->subject('تفعيل حسابك في Khabirak')
                    ->from("support@khabirak.pro",'Khabirak') // Set the email subject here
                    ->with([
                        'customer' => $this->customer,
                    ]);
    }
}
