<?php

namespace Davmixcool\Medium;

use Illuminate\Support\ServiceProvider;

class MediumServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'medium');

        $this->publishes([
            __DIR__.'/config/medium.php' => config_path('medium.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
