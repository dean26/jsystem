<?php

namespace App\Http\Controllers\Api;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Http\Requests\OrderStoreRequest;
use App\Http\Requests\OrderUpdateRequest;

class OrderController extends Controller
{
    public function index()
    {
        //ds()->queriesOn('checking a user query');
        $orders = Order::query()->with('payments')->orderBy('created_at', 'desc')->paginate(15);
        
        return OrderResource::collection($orders);
    }

    public function store(OrderStoreRequest $request)
    {
        $data = $request->validated();

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

    public function update(OrderUpdateRequest $request, Order $order)
    {
        $order->update($request->validated());

        return new OrderResource($order);
    }

    public function destroy(Order $order)
    {
        $order->delete();
        
        return response()->noContent();
    }
}
