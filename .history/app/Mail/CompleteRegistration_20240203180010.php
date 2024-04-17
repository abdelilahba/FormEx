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

    /**
     * Create a new message instance.
     *
     * @param  \App\Models\Customer  $customer
     * @return void
     */
    public function __construct(Customer $customer)
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
        return $this->view('emails.completeRegistration')
                    ->subject('Complete Your Registration')
                    ->with([
                        'customerName' => $this->customer->firstName,
                        // You can pass more data to the view as needed
                    ]);
    }
}
