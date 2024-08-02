<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nom;
    public $prenom;
    public $email;
    public $telephone;
    public $userMessage;
    

    /**
     * Create a new message instance.
     *
     * @param string $nom
     * @param string $prenom
     * @param string $email
     * @param string $telephone
     * @param string $userMessage
     */
    public function __construct($nom, $prenom, $email, $telephone, $userMessage)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->userMessage = $userMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('mail.from.address'), config('mail.from.name'))
        ->subject('Sujet de l\'email')
        ->view('emails.contact');
    }
}

