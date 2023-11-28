<?php

namespace App\Observers;

use Illuminate\Support\Facades\Log;

class ProductObserver
{
    /**
     * Handle the Product "created" event.
     *
     * @param \App\Models\Product $product
     * @return void
     */
    public function created(\App\Models\Product $product): void
    {
        Log::info('Product created by '.auth()->user()->name.' with id '.$product->id);
    }

    /**
     * Handle the Product "updated" event.
     *
     * @param \App\Models\Product $product
     * @return void
     */
    public function updated(\App\Models\Product $product): void
    {
        Log::info('Product updated by '.auth()->user()->name.' with id '.$product->id);
    }

    /**
     * Handle the Product "deleted" event.
     *
     * @param \App\Models\Product $product
     * @return void
     */
    public function deleted(\App\Models\Product $product): void
    {
        Log::info('Product deleted by '.auth()->user()->name.' with id '.$product->id);
    }

    /**
     * Handle the Product "restored" event.
     *
     * @param \App\Models\Product $product
     * @return void
     */
    public function restored(\App\Models\Product $product): void
    {
        //
    }

    /**
     * Handle the Product "force deleted" event.
     *
     * @param \App\Models\Product $product
     * @return void
     */
    public function forceDeleted(\App\Models\Product $product): void
    {
        //
    }
}
