<?php
namespace App\Factories;
use App\Contracts\PaymentMethod;
use App\PaymentMethods\VodafoneCashPayment;
use App\PaymentMethods\PaypalPayment;
use App\PaymentMethods\CreditCardPayment;
use InvalidArgumentException;


/**
 * Factory مسؤولة عن إنشاء Payment Method
 * 
 * ليه عملناها؟
 * عشان نفصل إنشاء الكائنات عن استخدامها
 * 
 * بدل ما نعمل:
 * new PaypalPayment()
 * 
 * نخلي مكان واحد مسؤول عن الإنشاء
 */


class PaymentFactory {
    public static function CreatePaymentMethod(string $type): PaymentMethod
    {
        // this way 1
        // switch ($type) {
        //     case 'vodafone':
        //         return new VodafoneCashPayment();
        //     case 'paypal':
        //         return new PaypalPayment();
        //     case 'credit_card':
        //         return new CreditCardPayment();
        //     default:
        //         throw new InvalidArgumentException("Unsupported payment method: " . $type);
        // }

        // this way 2
        return match ($type) {
            'vodafone' => new VodafoneCashPayment(),
            'paypal' => new PaypalPayment(),
            'credit_card' => new CreditCardPayment(),
            default => throw new InvalidArgumentException("Unsupported payment method: " . $type),
        };
    }
}