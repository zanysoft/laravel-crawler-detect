<?php

namespace ZanySoft\LaravelCrawlerDetect\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelCrawler extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'LaravelCrawler';
    }
}
