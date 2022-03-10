<?php

namespace App\Providers;

use App\Services\PaymentGatewayDiners;
use App\Services\PaymentGatewayPaypal;
use App\Services\PaymentService;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\HttpFoundation\Request;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PaymentService::class, function () {
            if (request()->gateway === 'diners') {
                return new PaymentGatewayDiners("12345");
            } else if (request()->gateway === 'paypal') {
                return new PaymentGatewayPaypal("12345");
            }
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
