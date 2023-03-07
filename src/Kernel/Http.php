<?php

namespace Caneara\Spine\Kernel;

use Caneara\Spine\Support\Arr;
use Illuminate\Foundation\Http\Kernel;

class Http extends Kernel
{
    /**
     * The application's custom middleware aliases.
     *
     */
    protected $customMiddlewareAliases = [];

    /**
     * The application's global HTTP middleware stack.
     *
     */
    protected $middleware = [
        \Caneara\Spine\Middleware\TrustHosts::class,
        \Caneara\Spine\Middleware\TrustProxies::class,
        \Illuminate\Http\Middleware\HandleCors::class,
        \Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \Caneara\Spine\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's middleware aliases.
     *
     */
    protected $middlewareAliases = [
        'auth'             => \Caneara\Spine\Middleware\Authenticate::class,
        'auth.basic'       => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'cache.headers'    => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can'              => \Illuminate\Auth\Middleware\Authorize::class,
        'guest'            => \Caneara\Spine\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        'signed'           => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle'         => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified'         => \Caneara\Spine\Middleware\EnsureEmailIsVerified::class,
    ];

    /**
     * The application's route middleware groups.
     *
     */
    protected $middlewareGroups = [

        'web' => [
            \Illuminate\Cookie\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \Caneara\Spine\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            \App\Middleware\HandleInertiaRequests::class,
        ],

        'api' => [
            \Illuminate\Routing\Middleware\ThrottleRequests::class.':api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

    ];

    /**
     * Get the application's route middleware aliases.
     *
     */
    public function getMiddlewareAliases() : array
    {
        return Arr::merge($this->middlewareAliases, $this->customMiddlewareAliases);
    }

    /**
     * Synchronize the current state of the middleware to the router.
     *
     */
    protected function syncMiddlewareToRouter() : void
    {
        parent::syncMiddlewareToRouter();

        foreach ($this->getMiddlewareAliases() as $key => $middleware) {
            $this->router->aliasMiddleware($key, $middleware);
        }
    }
}
