<?php

namespace App\payment;

use App\payment\PaymentInterface;

class PayPalPayment implements PaymentInterface
{

    public function pay($request)
    {
        echo "Pay with Paypal";
    }
    public function confirm($request)
    {
        echo "confirm Paypal payment";
    }
}
