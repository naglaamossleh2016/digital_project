<?php

use App\Http\Middleware\Visitor;
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
    //    $middleware->web(append: [Visitor::class]);

        $middleware->alias([
          'admin'=>\App\http\Middleware\AdminMiddleware::class,
          Illuminate\Auth\Middleware\RedirectIfAuthenticated::class
    ]);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
