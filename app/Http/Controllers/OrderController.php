<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show($orderId)
    {
        return response()->json(['test' => 'OK', 'orderId' => $orderId]);
    }
}
