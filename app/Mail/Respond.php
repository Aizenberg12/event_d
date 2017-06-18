<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Respond extends Mailable
{
    use Queueable, SerializesModels;
    public $respond_email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($respond_email)
    {
        $this->respond_email = $respond_email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('respond');
    }
}
