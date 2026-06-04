<?php 

namespace App\PaymentMethods;
use App\Contracts\PaymentMethod;

class VodafoneCashPayment implements PaymentMethod {
    public function pay(float $amount): string
    {
        // Logic to process Vodafone Cash payment
        return "Vodafone Cash payment processed for amount: $" . $amount;
    }
}
