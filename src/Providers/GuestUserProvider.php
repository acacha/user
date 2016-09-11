<?php

namespace Acacha\User\Providers;

use Illuminate\Support\ServiceProvider;

class GuestUserProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('signedIn',auth()->check());
        view()->share('user', auth()->user() ?: new \Acacha\User\GuestUser);
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
