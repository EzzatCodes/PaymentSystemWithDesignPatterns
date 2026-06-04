<?php

namespace App\Facade;

use App\Core\PaymentProcessor;
use App\Factories\PaymentFactory;
use App\Observers\Logger;
use App\Observers\EmailNotification;

class PaymentFacade
{
    public static function pay(string $type, float $amount): string
    {
        // strategy pattern 
        $method = PaymentFactory::CreatePaymentMethod($type);

        // facade pattern
        $processor = new PaymentProcessor();
        $processor->attach(new Logger());
        $processor->attach(new EmailNotification());
        return $processor->process($method, $amount);
    }
}