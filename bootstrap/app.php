<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        // This is where you add your custom route middleware alias

        $middleware->alias([
            'usertype' => \App\Http\Middleware\UserType::class, // <-- ADD THIS LINE
            // You might have other aliases already here, like:
            // 'auth' => \App\Http\Middleware\Authenticate::class,
            // 'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        ]);

        // Existing middleware groups (like web, api) might be here too:
        // $middleware->web(append: [
        //     // \App\Http\Middleware\TrustProxies::class,
        //     // \Illuminate\Session\Middleware\AddQueuedCookiesToResponse::class,
        // ]);

        // $middleware->api(append: [
        //     // \Illuminate\Routing\Middleware\SubstituteBindings::class,
        // ]);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
