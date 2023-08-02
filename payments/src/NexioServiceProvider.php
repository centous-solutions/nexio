<?php

namespace Nexio\Payments;
use Illuminate\Support\ServiceProvider;

class NexioServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
       $this->loadRoutesFrom(__DIR__.'/routes/web.php');
       $this->loadViewsFrom(__DIR__.'/views','payments');
    }
}
