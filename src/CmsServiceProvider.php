<?php

namespace Roocket\Cms;


use Illuminate\Support\ServiceProvider;

class CmsServiceProvider extends ServiceProvider
{
    /**
     * @return Cms
     */

    public function register()
    {
        $this->app->singleton('cms', function () {
            return new Cms;
        });

        $this->mergeConfigFrom(__DIR__ . '/Configs/CmsConfig.php', 'cms');
    }

    public function boot()
    {
        require __DIR__ . '\Http\routes.php';
        $this->loadViewsFrom(__DIR__ . '/Views', 'cms');

        $this->app['router']->middleware('admin' . \Roocket\Cms\Http\Middleware\admin::class);
        //php artisan vendor:publish --force
        //php artisan vendor:publish

        $this->publishes([
            __DIR__ . '/Configs/CmsConfig.php' => config_path('CmsConfig.php'),
            __DIR__ . '/Views' => base_path('resources/views/Cms'),
            __DIR__ . '/Migrations' => database_path('/migrations'),
            //for rollback migration must run dumpautoload command
            __DIR__ . '/Models' => base_path('/app')
        ]);


        //php artisan vendor:publish --provider="Roocket\Cms\CmsServiceProvider" --tag=config --force
//        $this->publishes([__DIR__ . '/Configs/CmsConfig.php' => config_path('CmsConfig.php')],'config');

        //php artisan vendor:publish --provider="Roocket\Cms\CmsServiceProvider" --tag=views --force
//        $this->publishes([__DIR__ . '/Views' => base_path('resources/views/Cms')],'views');
    }
}