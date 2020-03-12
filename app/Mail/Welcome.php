<?php

namespace App\Mail;

use App\Token;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Welcome extends Mailable
{
    use Queueable, SerializesModels;
    
    public $token;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($token){
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.welcome')
                ->from('info@cosae2020.com', 'Admin')
                ->subject('¡Bienvenido a COSAE2020!');
    }
}
