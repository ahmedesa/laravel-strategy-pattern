<?php
namespace App\payment;

interface PaymentInterface
{
    public function pay($request);

    public function confirm($request);
}
