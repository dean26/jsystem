<?php

namespace App\Payments\Strategy;

use App\Payments\Interfaces\PaymentStrategy;

class PayPalPayment implements PaymentStrategy
{
    public function pay(float $amount): string
    {
        return "Zaplacono przez paypal";
    }
}