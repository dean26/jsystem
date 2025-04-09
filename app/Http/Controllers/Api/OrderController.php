<?php

namespace App\Http\Controllers\Api;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::query()->with('payments')->paginate(15);
        
        return OrderResource::collection($orders);
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'file'  => 'file|max:10240',
        ]);

        $data = $request->all();

        $path = null;
        if($request->file('file')){
            $path = $request->file('file')->store('orders', 'local');
        }
        
        $order = Order::create([
            'product_name' => $data['product_name'],
            'quantity' => $data['quantity'],
            'price' => $data['price'],
            'file' => $path ?? null,
        ]);

        return new OrderResource($order);
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        $order->update($request->all());

        return new OrderResource($order);
    }

    public function destroy(Order $order)
    {
        $order->delete();
        
        return response()->noContent();
    }
}
