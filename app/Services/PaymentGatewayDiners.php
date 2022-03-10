<?php

namespace App\Services;

use App\Services\PaymentService;

class PaymentGatewayDiners implements PaymentService
{
  private $secretKey;

  public function __construct(string $secretKey)
  {
    $this->secretKey = $secretKey;
  }

  public function process()
  {
    return $this->execute();
  }

  public function execute()
  {
    return "Transakcija uspjesno izvrsena putem gatewaya DIners";
  }
}
