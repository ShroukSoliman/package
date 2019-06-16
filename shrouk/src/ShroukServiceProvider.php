<?php

namespace mediasci\shrouk;

use Illuminate\Support\ServiceProvider;

class ShroukServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
         include __DIR__.'/routes.php';
    }
}
