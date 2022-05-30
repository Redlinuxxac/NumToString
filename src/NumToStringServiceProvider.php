<?php

namespace Reddatasrd\NumTostring;

use Redlinux\NumTostring\NumTostring;
use Illuminate\Support\ServiceProvider;

class NumTostringServiceProvider extends ServiceProvider
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
        $this->app->make('Reddatasrd\NumTostring\Controllers\MainController');

         //Resources 
         $this->registerResources();
         //Migrations 
         $this->registerMigrations();
         //clase broma
         $this->app->bind('NumTostring', function($app){
             return new NumTostring();
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
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'NumTostring');
        //Load language translations...
        $this->loadTranslationsFrom(resource_path('lang/vendor/NumTostring'), 'NumTostring');
        $this->loadJsonTranslationsFrom(resource_path('lang/vendor/NumTostring'), 'NumTostring');
    }
    protected function registerMigrations():void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}