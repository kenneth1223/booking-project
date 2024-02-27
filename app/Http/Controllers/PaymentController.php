<?php

namespace App\Http\Controllers;

use Ixudra\Curl\Facades\Curl;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class PaymentController extends Controller
{
    public function pay()
    {
        $data = [
            'data' => [
                'attributes' => [
                    'line_items' => [
                        [
                            'currency' => 'PHP',
                            'amount' => 2000,
                            'description' => 'text',
                            'name' => 'Booking',
                            'quantity' => 1,
                        ]
                    ],
                    'payment_method_types' => [
                        'card',
                        'gcash',
                        'paymaya'
                    ],
                    'success_url' => 'http://localhost:8000/success',
                    'cancel_url' => 'http://localhost:8000',
                    'description' => 'text',
                ]
            ]
        ];

        $authorizationHeader = 'Basic ' . base64_encode(env('AUTH_PAY'));
        $response = Curl::to('https://access.lab.mynt.xyz/gconnect/oauth2/token')
            ->withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => $authorizationHeader
            ])
            ->withData($data)
            ->asJson()
            ->post();

        // dd($response);
        \Session::put('session_id', $response->data->id);

        return redirect()->to($response->data->attributes->checkout_url);
    }

    public function success()
    {
        $session_id = \Session::get('session_id');
        $authorizationHeader = 'Basic ' . base64_encode(env('AUTH_PAY'));

        $response = Curl::to('https://access.lab.mynt.xyz/gconnect/oauth2/token' . $session_id)
            ->withHeaders([
                'Accept' => 'application/json',
                'Authorization' => $authorizationHeader

            ])
            ->asJson()
            ->get();

        dd($response);
    }
}
