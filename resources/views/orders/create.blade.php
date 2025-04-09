@extends('layouts.app')

@section('title', 'Zamowienie - szczeoly')

@section('content')
    <h1>Nowy order</h1>
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

    <form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="product_name">Product Name:</label>
            <input type="text" name="product_name" value="{{ old('product_name') }}" required>
        </div>
        <div>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" value="{{ old('quantity', 1) }}" min="1" required>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="number" name="price" value="{{ old('price') }}" step="0.01" min="0" required>
        </div>
        <div>
            <label for="file">File:</label>
            <input type="file" name="file">
        </div>
        <button type="submit">Create</button>
    </form>
    
@endsection