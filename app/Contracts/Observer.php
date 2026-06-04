<?php

namespace App\Contracts;


/**
 * أي Observer لازم يكون عنده method اسمها update
 * 
 * دي اللي هتتنفذ لما يحصل event (payment success)
 */

interface Observer
{
    public function update(string $message): void;
}