<?php

namespace App\Observers;
use App\Contracts\Observer;


/**
 * - ده Observer مسؤول عن الإيميل
*/

class EmailNotification implements Observer
{
    public function update(string $message): void
    {
        // Logic to send email notification
        echo "<br> Email Notification: " . $message;
    }
}