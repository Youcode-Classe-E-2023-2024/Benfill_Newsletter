<?php

namespace App\Listeners;

use App\Events\Subscribed;
use App\Mail\subscribedMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendMail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Subscribed $event)
    {
        Mail::to($event->email)->send(new subscribedMessage($event->email));
    }
}
