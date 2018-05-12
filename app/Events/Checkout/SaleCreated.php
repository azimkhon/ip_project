<?php

namespace App\Events\Checkout;

use App\Sale;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class SaleCreated
{
    use Dispatchable, SerializesModels;

    public $sale;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    
    public function __construct(Sale $sale)
    {
        $this->sale = $sale;
    }

}
