@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Order #{{ $order->id }}</h1>
    <p>Status: {{ $order->status }}</p>
    <h2>Order Details</h2>
    <ul>
        @foreach ($order->items as $item)
            <li>{{ $item->name }} - {{ $item->quantity }} x {{ $item->price }}</li>
        @endforeach
    </ul>
</div>
@endsection
