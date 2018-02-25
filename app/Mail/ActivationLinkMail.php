<?php

namespace App\Mail;

use App\ActivationLink;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ActivationLinkMail extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var ActivationLink
     */
    private $activationLink;

    /**
     * Create a new message instance.
     *
     * @param ActivationLink $activationLink
     */
    public function __construct(ActivationLink $activationLink)
    {
        //
        $this->activationLink = $activationLink;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Confirm your Identihub email')
            ->view('mails.confirmation-link', ['activationLink' => $this->activationLink]);
    }
}
