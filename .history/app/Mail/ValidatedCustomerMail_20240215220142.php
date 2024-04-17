<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ValidatedCustomerMail extends Mailable
{
    use Queueable, SerializesModels;
    public $customer;
    public $link;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($customer)
    {
        $this->customer = $customer;
       
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Validated Customer Mail',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function build()
    {
        return $this->markdown('emails.validated_customer')
        ->subject('تفعيل حسابك في Khabirak') // Change the subject here

                    ->with([
                        'customer' => $this->customer,
                    ]);
    }
 

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
