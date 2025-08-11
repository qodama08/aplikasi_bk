<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\CheckRole;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
<<<<<<< HEAD
        $middleware->alias(['cekRole' => CheckRole::class,]);
=======
        $middleware->alias([
            'cekRole' => CheckRole::class,
        ]);
>>>>>>> 828c9f8 (update layout)
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
