@extends('layouts.app')

@section('title', 'Lista zamowien')

@section('content')
    <h1>Pogoda w {{ $city }}</h1>
    @if(!empty($data['current']['temp_c']))
        {{ $data['current']['temp_c'] }}
    @endif

@endsection