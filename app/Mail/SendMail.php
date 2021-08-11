<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $commandes;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($commandes)
    {
        //
        $this->commandes = $commandes;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('dipamafrederic07@gmail.com')->subject('facture du produit')->view('mail.invoice')->with('commandes', $this->commandes);
    }
}
