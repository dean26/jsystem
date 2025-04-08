@extends('layouts.app')

@section('title', 'Lista zamowien')

@section('content')
    <h1>Orders - list</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
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
                        <a href="{{ route('orders-db.show', ['id' => $order->id]) }}">Szczególy</a>
                        <form action="{{ route('orders-db.destroy', ['id' => $order->id]) }}" method="POST" style="display:inline;">
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