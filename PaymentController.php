<?php

namespace App\Http\Controllers\Api;

use App\payment\PaymentContext;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function store(PaymentRequest $request)
    {
        try {
            $gateway = new PaymentContext($request->gateway);

            $gateway->pay($request);
        } catch (\Exception $e) {
            return response()->json(
                [
                    'error'    => 'Payment did not confirmed',
                    'detailes' => $e->getMessage(),
                ],
                500
            );
        }
    }
}
