<?php

namespace App\Payments;

use App\Payments\Interfaces\PaymentStrategy;

class PaymentProcessor{

    public PaymentStrategy $paymentStrategy;

    public function __construct(PaymentStrategy $paymentStrategy)
    {
        $this->paymentStrategy = $paymentStrategy;
    }

    public function setStrategy(PaymentStrategy $paymentStrategy){
        $this->paymentStrategy = $paymentStrategy;
    }
}