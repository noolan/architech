<?php

namespace Architech\Providers;

use Illuminate\Support\ServiceProvider;
use Architech\Business;

class AppServiceProvider extends ServiceProvider
{
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
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
		//$this->app->instance('Business', Business::byURL(rtrim($app['request']->instance()->getBaseUrl(), '/')));

		$this->app->singleton('Business', function($app)
		{
			return Business::with(['pages'])->where('url', '=', $app['request']->getHost())->firstOrFail();
		});
    }
}
