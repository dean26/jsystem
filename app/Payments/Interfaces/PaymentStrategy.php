<?php

namespace App\Payments\Interfaces;

interface PaymentStrategy
{
    public function pay(float $amount): string;
}