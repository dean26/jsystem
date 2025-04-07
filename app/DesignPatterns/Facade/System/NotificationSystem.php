<?php

namespace App\DesignPatterns\Facade\System;

class NotificationSystem {

    public function sendEmail(string $email): string
    {
        return "Sent";
    }

}