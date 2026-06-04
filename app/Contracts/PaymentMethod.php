<?php

namespace App\Contracts;

/**
 * ده Interface بيوحد شكل كل طرق الدفع
 * 
 * ليه عملناه؟
 * - عشان أي طريقة دفع لازم يكون عندها نفس الميثود (pay)
 * - بيحقق Open/Closed Principle
 * - يخلينا نضيف طرق دفع جديدة بدون تعديل باقي السيستم
 */

interface PaymentMethod
{
    public function pay(float $amount): string;
}


