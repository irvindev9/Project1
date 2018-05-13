<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Correo extends Mailable
{
    use Queueable, SerializesModels;

    public $Correo;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Correo $Correo)
    {
        //
        $this->Correo = $Correo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.correo');
    }
}
