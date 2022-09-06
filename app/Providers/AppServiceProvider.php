<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;
use Illuminate\Foundation\Vite;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Register the Filament theme file using Vite
        // https://filamentphp.com/docs/2.x/admin/appearance#including-frontend-assets
        Filament::serving(function () {
            Filament::registerTheme(
                app(Vite::class)('resources/css/filament.css')
            );
        });
    }
}
