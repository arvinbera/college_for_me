<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    then: function () {
        Route::middleware('web')
            ->prefix('lead')
            ->group(base_path('routes/lead.php'));
        Route::middleware('web')
            ->prefix('counselor')
            ->group(base_path('routes/counselor.php'));
        Route::middleware('api')
            ->prefix('api')
            ->group(base_path('routes/front_api.php'));
    }
    )
    ->withMiddleware(function (Middleware $middleware) {

        $middleware->alias(['lead-access' => \App\Http\Middleware\LeadAuth::class]);
    })
    ->withMiddleware(function (Middleware $middleware) {

    $middleware->alias(['user-access' => \App\Http\Middleware\UserAuth::class]);
    })
    ->withMiddleware(function (Middleware $middleware) {

        $middleware->alias(['counselor-access' => \App\Http\Middleware\CounselorAuth::class]);
    })
    ->withMiddleware(function (Middleware $middleware) {

        $middleware->alias(['college-admin-access' => \App\Http\Middleware\CollegeAdminAuth::class]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
