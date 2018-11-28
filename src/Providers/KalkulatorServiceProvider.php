<?php

namespace YudiAndela\Kalkulator\Providers;

use Illuminate\Support\ServiceProvider;

class KalkulatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Register publish method
         */
        $this->publishFiles();

        /**
         * Include route from this packages
         */
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        /**
         * register any controller
         */
        $this->app->make('YudiAndela\Kalkulator\Controllers\KalkulatorController');

        /**
         * register this view
         */
        $this->loadViewsFrom(__DIR__ . '/../views', 'KalkulatorView');
    }

    /**
     * Publish file for the packages.
     *
     * @return void
     */
    protected function publishFiles()
    {
        $this->publishes([
            __DIR__ . '/../Views' => base_path('resources/views/vendor'),
        ], 'kalkulator');
    }
}
