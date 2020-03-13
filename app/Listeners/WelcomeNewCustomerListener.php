<?php

namespace App\Listeners;

use App\Mail\WelcomeNewUserMail1;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class WelcomeNewCustomerListener implements ShouldQueue
{

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        //
        sleep(10);
        Log::info('ss');
        Mail::to($event->customer->email)->send( new WelcomeNewUserMail1());

    }
}
