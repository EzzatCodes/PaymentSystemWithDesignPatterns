<?php 

namespace App\Observers;
use App\Contracts\Observer;


/**
 * - ده Observer مسؤول عن تسجيل العمليات
*/

class Logger implements Observer
{
    public function update(string $message): void
    {
        // Logic to log the message
        echo "Log: " . $message;
    }
}