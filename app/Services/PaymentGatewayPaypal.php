<?php

namespace App\Services;

use App\Services\PaymentService;

class PaymentGatewayPaypal implements PaymentService
{
  private $secretKey;

  public function __construct()
  {
    $this->secretKey = '789';
  }

  public function process()
  {
    return $this->execute();
  }

  public function execute()
  {
    return "Transakcija uspjesno izvrsena putem gatewaya Paypal";
  }
}
