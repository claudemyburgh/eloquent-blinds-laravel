<?php

namespace App\Listeners;

use App\Events\ContactFormWasSubmitted;
use App\Models\Client;


use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;


class ClientListener implements ShouldQueue
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
    public function handle(ContactFormWasSubmitted $event)
    {
        $client = new Client();

        if (!$client::where('email', $event->data['email'])->exists()) {
            $client->fill($event->data);
            $client->save();
        }

//        Newsletter::subscribe('rincewind@discworld.com', ['first_name' => 'Rince', 'last_name' => 'Wind']);


    }
}
