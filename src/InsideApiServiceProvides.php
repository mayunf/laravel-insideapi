<?php
/**
 * Created by PhpStorm.
 * User: mayunfeng
 * Date: 2018/2/26
 * Time: 15:32
 */

namespace Mayunfeng\LaravelInsideApi;


use Illuminate\Support\ServiceProvider;
use InsideAPI\Foundation\Application;

class InsideApiServiceProvides extends ServiceProvider 
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    public function boot()
    {
        $this->publishes([
            dirname(__DIR__).'/config/insideapi.php' => config_path('insideapi.php'), ],
            'insideapi'
        );
    }

    public function register()
    {
        $this->mergeConfigFrom(dirname(__DIR__).'/config/insideapi.php','insideapi');

        $this->app->singleton('insideapi',function (){
            return new Application(config('insideapi'));
        });

    }

//    public function provides()
//    {
//        return array('insideapi');
//    }


}