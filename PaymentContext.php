<?php

namespace App\payment;

use App\payment\PaymentInterface;

class PaymentContext
{
    private $gateway;

    public function __construct(string $gateway)
    {
        $gateway = sprintf('App\payment\%Payment', $gateway);

        if (!is_a($gateway, PaymentInterface::class, true)) {
            throw new \Exception('invalid gateway');
        }

        $this->gateway = new $gateway;
    }

    public function pay($data)
    {
        return $this->gateway->pay($data);
    }

    public function confirm($data)
    {
        return $this->gateway->pay($data);
    }
}
