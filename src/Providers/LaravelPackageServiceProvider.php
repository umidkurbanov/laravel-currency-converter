<?php

namespace Umid\LaravelCurrencyConverter\Providers;

use Illuminate\Support\ServiceProvider;
use Umid\LaravelCurrencyConverter\Currency;

class LaravelPackageServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(Currency::class, Currency::class);

        $this->mergeConfigFrom(
            __DIR__ . '/../../config/laravel-package.php', 'laravel-package'
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}