<?php

namespace App\payment;

use App\payment\PaymentInterface;

class CreditCardPayment implements PaymentInterface
{
    public function pay($request)
    {
        echo "Pay with Credit Card";
    }
    public function confirm($request)
    {
        echo "confirm Credit card payment";
    }
}
