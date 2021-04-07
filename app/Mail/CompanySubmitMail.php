<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CompanySubmitMail extends Mailable
{
    use Queueable, SerializesModels;

    public $company_name = '';
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        //
        $this->company_name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = env('SENDGRID_FROM_EMAIL');
        $subject = 'Company has completed!';
        $name = 'Puream Contact';
        $content = $this->company_name.' has completed due diligence';
        return $this->view('emails.company-submit')
            ->with('content', $content)
            ->from($address, $name)
            ->subject($subject);
    }
}
