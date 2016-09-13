<?php

namespace Acacha\User\Providers;

use Acacha\User\Http\Middleware\GuestUser;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

/**
 * Class GuestUserProvider
 * @package Acacha\User\Providers
 */
class GuestUserProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @param Router $router
     */
    public function boot(Router $router)
    {
        $router->pushMiddlewareToGroup('web',GuestUser::class);
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
