<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
     
        Schema::defaultStringLength(191);
        Route::middleware('api')
            ->prefix('api')
            ->group(base_path('routes/api.php'));
            config()->set('app.key', 'base64:RpZGxVT48pGUWASWaBXZ25vc2VH1zzPPioG1CmNpFuw=');
    }

}
