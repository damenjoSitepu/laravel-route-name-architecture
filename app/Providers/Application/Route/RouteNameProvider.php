<?php

namespace App\Providers\Application\Route;

use Illuminate\Support\ServiceProvider;

// Route Name Root 
use App\Transcendent\Support\Route\Name\Root;
// Home Route Name Modules
use App\Transcendent\Support\Route\Name\Modules\Home;
use App\Transcendent\Support\Route\Name\Modules\Profile;

class RouteNameProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Home Module Route Name
        $this->app->singleton(Home::class, function() {
            return new Home;
        });
        // Profile Module Route Name
        $this->app->singleton(Profile::class, function() {
            return new Profile;
        });
        // RouteName Facades
        $this->app->bind('RouteName', function() {
            return new Root(
                $this->app->make(Home::class), 
                $this->app->make(Profile::class)
            );
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
