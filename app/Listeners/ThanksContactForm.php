<?php

namespace App\Listeners;

use App\Events\ContactFormWasSubmitted;
use App\Mail\ThankYou;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class ThanksContactForm implements ShouldQueue
{

    use InteractsWithQueue;

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
     * @param  \App\Events\ContactFormWasSubmitted  $event
     * @return void
     */
    public function handle(ContactFormWasSubmitted $event): void
    {
        Mail::to($event->data['email'])->queue(new ThankYou($event->data));
    }
}
