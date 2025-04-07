<?php

namespace App\Payments\Strategy;

use App\Payments\Interfaces\PaymentStrategy;

class BankTransferPayment implements PaymentStrategy
{
    public function pay(float $amount): string
    {
        return "Zaplacono przelewen bankowym";
    }
}