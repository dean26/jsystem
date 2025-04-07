<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payments\PaymentProcessor;
use App\Payments\Strategy\CreditCardPayment;
use App\DesignPatterns\Facade\ECommerceFacade;
use App\Payments\Strategy\BankTransferPayment;

class WebController extends Controller
{
    public function order(ECommerceFacade $ecommerceFacade)
    {
        return $ecommerceFacade->order(
            'admin',
            'password1!',
            123.55,
            'admin@admin.pl'
        );
    }

    public function payment()
    {
        $creditCardPayment = new CreditCardPayment();
        $bankTransferPayment = new BankTransferPayment();
        
        $paymentProcessor = new PaymentProcessor($creditCardPayment);

        echo $paymentProcessor->paymentStrategy->pay(123);
        echo " ";
        $paymentProcessor->setStrategy($bankTransferPayment);

        echo $paymentProcessor->paymentStrategy->pay(22);
    }
}
