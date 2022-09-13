<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\TextValidate\Validate;

class textValidateProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('InputValidate', Validate::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
