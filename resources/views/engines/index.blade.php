@extends('layouts.app')

@section('title', 'Lista silników')

@section('content')
    <h1>Engines - list</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($engines as $engine)
                <tr>
                    <td>{{ $engine->id }}</td>
                    <td>{{ $engine->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $engines->links() }}
@endsection