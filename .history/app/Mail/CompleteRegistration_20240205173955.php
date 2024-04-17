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
    public $activationLink;

    /**
     * Create a new message instance.
     *
     * @param  \App\Models\Customer  $customer
     * @return void
     */
    public function __construct($customer, $activationLink)
    {
        $this->customer = $customer;
        $this->activationLink = $activationLink;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Your Account Has Been Activated')
                    ->view('emails.customerActivated')
                    ->with([
                        'customer' => $this->customer,
                        'activationLink' => $this->activationLink,
                    ]);
    }
}
