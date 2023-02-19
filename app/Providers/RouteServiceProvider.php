<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/dashboard';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {

        $this->mapWebRoutes();
        $this->mapApiRoutes();

    }

    protected function mapApiRoutes()
    {
        Route::prefix('api')
        ->domain(config('domains.main.domain'))
        ->middleware(['api'])
        ->namespace($this->namespace . '\Buyer\API')
        ->group(base_path('routes/buyer/api.php'));

        Route::prefix('api')
            ->as('api.admin.')
            ->domain(config('domains.admin.domain'))
            ->middleware(['api'])
            ->namespace($this->namespace . '\Admin\API')
            ->group(base_path('routes/admin/api.php'));

        Route::prefix('api')
            ->as('api.seller.')
            ->domain(config('domains.seller.domain'))
            ->middleware(['api'])
            ->namespace($this->namespace . '\Seller\API')
            ->group(base_path('routes/seller/api.php'));

        Route::prefix('api')
            ->as('api.delivery.')
            ->domain(config('domains.delivery.domain'))
            ->middleware(['api'])
            ->namespace($this->namespace . '\Delivery\API')
            ->group(base_path('routes/delivery/api.php'));
    }

    protected function mapWebRoutes()
    {
        Route::middleware(['web'])
            ->domain(config('domains.main.domain'))
            ->namespace($this->namespace . '\Buyer')
            ->group(base_path('routes/buyer/web.php'));

        Route::middleware('web')
            ->as('admin.')
            ->domain(config('domains.admin.domain'))
            ->namespace($this->namespace . '\Admin')
            ->group(base_path('routes/admin/web.php'));

        Route::middleware(['web'])
            ->as('seller.')
            ->domain(config('domains.seller.domain'))
            ->namespace($this->namespace . '\Seller')
            ->group(base_path('routes/seller/web.php'));

        Route::middleware(['web'])
            ->as('delivery.')
            ->domain(config('domains.delivery.domain'))
            ->namespace($this->namespace . '\Delivery')
            ->group(base_path('routes/delivery/web.php'));
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}