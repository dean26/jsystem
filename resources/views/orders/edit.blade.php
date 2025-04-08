@extends('layouts.app')

@section('title', 'Zamowienie - szczeoly')

@section('content')
    <h1>Edycja order</h1>
    @if ($errors->any())
        <div>
            <strong>Whoops!</strong> Please fix the following errors:
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('orders.update', $order) }}" method="POST">
        @csrf
        <div>
            <label for="product_name">Product Name:</label>
            <input type="text" name="product_name" value="{{ old('product_name' , $order->product_name) }}" required>
        </div>
        <div>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" value="{{ old('quantity', $order->quantity) }}" min="1" required>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="number" name="price" value="{{ old('price', $order->price) }}" step="0.01" min="0" required>
        </div>
        <button type="submit">Edit</button>
    </form>
    
@endsection