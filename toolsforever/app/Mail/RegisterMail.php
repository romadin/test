<?php

namespace App\Mail;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Werknemers;

class RegisterMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The Werknemer instance 
     * 
     * @var Werknemers
     */
    public $werknemer;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Werknemers $werknemer)
    {
        $this->werknemer = $werknemer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.emailRegister');
    }
}
