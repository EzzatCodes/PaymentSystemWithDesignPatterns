<?php

namespace App\Core;

use App\Contracts\PaymentMethod;
use App\Contracts\Observer;


// this class is responsible for processing payments, it takes a payment method and an amount, and calls the pay method of the payment method to process the payment

/**
 * الكلاس ده بقى Subject
 * يعني عنده observers وبيبلغهم
 */
class PaymentProcessor
{

    private $observers = [];

    /**
     * نضيف observer جديد
     */

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * نبلغ كل observers
     */

    public function notify(string $message)
    {
        foreach ($this->observers as $observer) {
            $observer->update($message);
        }
    }

    public function process(PaymentMethod $paymentMethod, float $amount): string
    {
        $result = $paymentMethod->pay($amount);
        
        // هنا بنبلغ كل observers
        $this->notify($result);
        return $result;
    }
}
