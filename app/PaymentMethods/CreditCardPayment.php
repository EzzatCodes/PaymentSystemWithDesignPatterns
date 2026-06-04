<?php

namespace App\PaymentMethods;
use App\Contracts\PaymentMethod;

class CreditCardPayment implements PaymentMethod {
    public function pay(float $amount): string
    {
        // Logic to process credit card payment
        return "Credit card payment processed for amount: $" . $amount;
    }
}