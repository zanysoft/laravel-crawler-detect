<?php

namespace ZanySoft\LaravelCrawlerDetect;

use Illuminate\Support\ServiceProvider;

class LaravelCrawlerDetectServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        //$this->package('ZanySoft/LaravelCrawlerDetect');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('LaravelCrawler', function ($app) {
            return new \ZanySoft\LaravelCrawlerDetect\CrawlerDetect();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
