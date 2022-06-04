<?php

namespace Reddatasrd\Conver;

use Redlinux\Conver\Conver;
use Illuminate\Support\ServiceProvider;

class ConverServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //rutas
        $this->registerRoutes();
        //controlador
        $this->app->make('Reddatasrd\Conver\Controllers\MainController');

         //Resources 
         $this->registerResources();
         //Migrations 
         $this->registerMigrations();
         //clase broma
         $this->app->bind('Conver', function($app){
             return new Conver();
         });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    /**
     * Rusatas
     */
    protected function registerRoutes(): void
    {
        require_once __DIR__ . '/../routes/web.php';
    }
    
    protected function registerResources(): void
    {        
        //Load the views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'conver');
        //Load language translations...
        $this->loadTranslationsFrom(resource_path('lang/vendor/conver'), 'conver');
        $this->loadJsonTranslationsFrom(resource_path('lang/vendor/conver'), 'conver');
    }
    protected function registerMigrations():void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}