<?php

namespace SSLCZ\SSLCommerz;

use Illuminate\Support\ServiceProvider;

class SSLCommerzServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/sslcommerz.php' => config_path('sslcommerz.php'),
        ]);
    }

    public function register()
    {
        //
    }
}
