<?php 

namespace App\Services;

class OrderStoreService
{

    public function createStore(array $data, OrderStoreRequest $request): \App\Models\Order
    {
        $path = null;
        if($request->file('file')){
            $path = $this->uploadFile($request->file('file'));
        }

        $order = Order::create([
            'product_name' => $data['product_name'],
            'quantity' => $data['quantity'],
            'price' => $data['price'],
            'file' => $path ?? null,
        ]);

        return $order;
    }

    private function uploadFile($file): ?string
    {
        $path = $file->store('orders', 'local');
    }



}