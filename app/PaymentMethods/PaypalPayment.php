<?php

namespace App\PaymentMethods;

use App\Contracts\PaymentMethod;




/**
 * ده Implementation لطريقة دفع (PayPal)
 * 
 * ليه كل طريقة في كلاس لوحدها؟
 * عشان نطبق Strategy Pattern
 * وكمان ال عشان نطبق ال factory pattern بسهولة لما نضيف طرق دفع جديدة
 * الفكرة:
 * بدل ما نعمل if/else لكل طريقة دفع
 * كل طريقة تبقى isolated
 */

class paypalPayment implements PaymentMethod {
    public function pay(float $amount): string
    {
        // Logic to process PayPal payment
        return "PayPal payment processed for amount: $" . $amount;
    }
}