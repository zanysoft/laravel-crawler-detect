Laravel Crawler Detect
=======
[![Build Status](https://img.shields.io/travis/zanysoft/laravel-crawler-detect/master.svg?style=flat-square)](https://travis-ci.org/zanysoft/laravel-crawler-detect) [![Total Downloads](https://img.shields.io/packagist/dt/JayBizzle/laravel-crawler-detect.svg?style=flat-square)](https://packagist.org/packages/zanysoft/laravel-crawler-detect)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/zanysoft/laravel-crawler-detect.svg?style=flat-square)](https://scrutinizer-ci.com/g/zanysoft/laravel-crawler-detect/?branch=master) [![StyleCI](https://styleci.io/repos/32484055/shield)](https://styleci.io/repos/32484055)

Installation
============

Run `composer require zanysoft/laravel-crawler-detect` or add `"zanysoft/laravel-crawler-detect": "^1.0"` to your `composer.json` file.

Add the following to the `providers` array in your `config/app.php` file..

```PHP
  ZanySoft\LaravelCrawlerDetect\LaravelCrawlerDetectServiceProvider::class,
```

...and the following to your `aliases` array...

```PHP
  'Crawler'   => 'ZanySoft\LaravelCrawlerDetect\Facades\LaravelCrawler',
```

Laravel 5.5 uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.

Usage
==================
```PHP
// Check current 'visitors' user agent
if(Crawler::isCrawler()) {
  // true if crawler user agent detected
}


// Pass a user agent as a string
if(Crawler::isCrawler('Mozilla/5.0 (compatible; aiHitBot/2.9; +https://www.aihitdata.com/about)')) {
  // true if crawler user agent detected
}
