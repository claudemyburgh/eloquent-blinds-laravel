<?php

namespace App\Listeners;

use App\Events\ContactFormWasSubmitted;
use App\Mail\ContactUs;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendContactForm implements ShouldQueue
{
    use InteractsWithQueue;


    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\ContactFormWasSubmitted  $event
     * @return void
     */
    public function handle(ContactFormWasSubmitted $event): void
    {
        Mail::to(config('mail.from.address'))
            ->bcc(config('dashboard.admin.claude.email'))
            ->cc(config('dashboard.admin.hendry.email'))
            ->queue(new ContactUs($event->data));
    }
}
