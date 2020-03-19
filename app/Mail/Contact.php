<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $email, $mensaje;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $mensaje)
    {
        $this->name = $name;
        $this->email = $email;
        $this->mensaje = $mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $name, $message, $email
        return $this->view('emails.contact')
                    ->from('info@cosae2020.com', $this->name)
                    ->subject('Nuevo mensaje en Cosae2020');
    }
}
