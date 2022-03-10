<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PaymentService;
use App\Services\PaymentGatewayPaypal;

class PlacanjeController extends Controller
{
    public function show(PaymentService $payment)
    {
        $novi = resolve(PaymentService::class);
        dd($payment, $novi);
        //$placanje = new PaymentService('12121');
        dd($payment->process());
        //dd(app());
    }
}
