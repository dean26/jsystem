<?php

namespace App\DesignPatterns\Facade;

use App\DesignPatterns\Facade\System\AuthSystem;
use App\DesignPatterns\Facade\System\PaymentSystem;
use App\DesignPatterns\Facade\System\NotificationSystem;

class ECommerceFacade {

    public function __construct(
        private AuthSystem $authSystem,
        private PaymentSystem $paymentSystem,
        private NotificationSystem $notificationSystem,
    ){

    }

    public function order(
        string $username, 
        string $password, 
        float  $amount, 
        string $email
    ): void
    {

        if($this->authSystem->login($username, $password)){
            echo $this->paymentSystem->process($amount);
            echo $this->notificationSystem->sendEmail($email);
        } else {
            echo "User niezalogowany";
        }

    }

}