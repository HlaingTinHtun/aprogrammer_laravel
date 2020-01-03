<?php

namespace App\Listeners;

use App\Events\ReceipeCreatedEvent;
use App\Mail\ReceipeStored;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class ReceipeCreatedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ReceipeCreatedEvent  $event
     * @return void
     */
    public function handle(ReceipeCreatedEvent $event)
    {
        \Mail::to('hlaingtinhtun97@gmail.com')->send(new ReceipeStored($event->receipe));
    }
}
