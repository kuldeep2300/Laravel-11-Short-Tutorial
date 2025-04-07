<?php

use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;
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
        $middleware->appendToGroup('check1', [
            AgeCheck::class,
            CountryCheck::class,
        ]);

        // We can create multiple group middleware also
        /* $middleware->appendToGroup('check2', [
            AuthCheck::class,
            LoginCheck::class,
        ]); */
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
