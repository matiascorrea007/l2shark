<?php

namespace Soft\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \Soft\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \Soft\Http\Middleware\VerifyCsrfToken::class,
            //mis middlewares de traduccinn
            \Soft\Http\Middleware\LangMiddleware::class,
            \Soft\Http\Middleware\setDB::class,
            \Soft\Http\Middleware\setRecaptcha::class,
            \Soft\Http\Middleware\setEmail::class,
        ],

        'api' => [
            'throttle:60,1',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        //el auth nos dice si esta autenticado o no para mandarnos a otros links
        'auth' => \Soft\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'can' => \Illuminate\Foundation\Http\Middleware\Authorize::class,
        //guest es todo lo contrario a auth
        'guest' => \Soft\Http\Middleware\RedirectIfAuthenticated::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,

        //mis middlewares
        'admin'=> \Soft\Http\Middleware\Admin::class,
        
       
        
    ];
}
