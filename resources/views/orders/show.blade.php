@extends('layouts.app')

@section('title', 'Zamowienie - szczeoly')

@section('content')
    <h1>Order #{{ $order->id }}</h1>

    <p><strong>Product:</strong> {{ $order->product_name }}</p>
    <p><strong>Quantity:</strong> {{ $order->quantity }}</p>
    <p><strong>Price:</strong> ${{ $order->price }}</p>
    
    <a href="{{ route('orders-db.index') }}">Back to list</a>
    
@endsection