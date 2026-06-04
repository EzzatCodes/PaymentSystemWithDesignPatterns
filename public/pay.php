<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Facade\PaymentFacade;


/**
 * ده بيستقبل البيانات من الفورم
 */

$type = $_POST['method'];
$amount = (float) $_POST['amount'];

/**
 * هنا بنستخدم Facade (API الداخلي)
 */

$result = PaymentFacade::pay($type, $amount);

require_once __DIR__ . '/../views/success.php';
