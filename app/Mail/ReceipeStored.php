<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReceipeStored extends Mailable
{
    use Queueable, SerializesModels;


    public $receipe;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($receipe)
    {
        $this->receipe = $receipe;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('receipe');
    }
}
