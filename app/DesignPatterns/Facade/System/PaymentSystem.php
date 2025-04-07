<?php

namespace App\DesignPatterns\Facade\System;

class PaymentSystem {

    public function process(float $amount): string
    {
        return "OK";
    }

}