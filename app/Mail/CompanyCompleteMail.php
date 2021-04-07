<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CompanyCompleteMail extends Mailable
{
    use Queueable, SerializesModels;
    public $company;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        $this->company = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = env('SENDGRID_FROM_EMAIL');
        $subject = 'Company is completed!';
        $name = 'Puream Contact';
        return $this->view('emails.company-complete')
            ->with('company', $this->company)
            ->from($address, $name)
            ->subject($subject);
    }
}
