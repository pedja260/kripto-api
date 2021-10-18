<?php

namespace App\Listeners;

use App\Events\PriceAlertEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class PriceAlertEventListener
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
     * @param  PriceAlertEvent  $event
     * @return void
     */
    public function handle(PriceAlertEvent $event)
    {
        //
    }
}
