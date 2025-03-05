<?php

namespace Sehouli\MoroccoLocations;

use Illuminate\Support\ServiceProvider;
use Sehouli\MoroccoLocations\SehouliPackage;

class SehouliServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Register any package routes, views, migrations, etc.
        $this->publishes([
            __DIR__ . '/../config/morocco-locations.php' => config_path('morocco-locations.php'),
        ]);
    }

    public function register()
    {
        $this->app->singleton(SehouliPackage::class, function ($app) {
            return new SehouliPackage();
        });
    }
}