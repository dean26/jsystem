@extends('layouts.app')

@section('title', 'Lista zamowien')

@section('content')
    <h1>Orders - list</h1>

    <p>
        <a href="{{ route('orders.create') }}">Dodaj zamowienie</a>
    </p>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Payments</ht>
                <th>Akcja</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->product_name }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->price }}</td>
                    <td>
                        @foreach ($order->payments as $payment)
                            #{{ $payment->id }} - {{ $payment->status }}<br/>
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('orders.edit', $order) }}">Edytuj</a>
                        <form action="{{ route('orders.destroy', $order) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $orders->links() }}
@endsection