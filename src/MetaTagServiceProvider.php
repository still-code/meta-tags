<?php

namespace MetaTag;

use Illuminate\Support\ServiceProvider;

class MetaTagServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('meta-tag', function () {
            return new MetaTag();
        });
    }
}
