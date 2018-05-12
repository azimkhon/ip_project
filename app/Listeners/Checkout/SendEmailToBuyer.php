<?php

namespace App\Listeners\Checkout;

use Mail;
use App\Mail\Checkout\SaleConfirmation;
use App\Events\Checkout\SaleCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailToBuyer
{

    /**
     * Handle the event.
     *
     * @param  SaleCreated  $event
     * @return void
     */ 
    public function handle(SaleCreated $event)
    {
        Mail::to($event->sale->buyer_email)->send(new SaleConfirmation($event->sale));
    }
}
