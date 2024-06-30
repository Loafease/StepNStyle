<!-- orders.index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Orders</h2>
        @foreach ($orders as $order)
        <div class="order">
                <h3>Order ID: {{ $order->id }}</h3>
                <p>Status: {{ ucfirst($order->status) }}</p>
                <p>Total Amount: PHP {{ number_format($order->total_amount, 2) }}</p>
                <p>Customer Name: {{ $order->customer_name }}</p>
                <p>Customer Email: {{ $order->customer_email }}</p>
                <p>Phone: {{ $order->phone }}</p>
                <p>Order Date: {{ $order->created_at->format('F d, Y') }}</p>
                <!-- Add more order details here -->
                <div class="order-items">
                <h4>Shipping Details</h4>
                            <p><strong>Address:</strong>137 sitio sabaro</p>
                            <p><strong>City:</strong>Alaminos city</p>
                            <p><strong>Postal Code:</strong> 2404</p>
                            <p><strong>Province:</strong>Pangasinan</p>
                        </div>
                        <div class="col-md-6">
                            <h4>Payment Information</h4>
                            <p><strong>Payment Method:</strong> Cash On Delivery</p>
                            <p><strong>Payment Status:</strong>Pending</p>
                        </div>

                    <ul>
                       @foreach ($order->items ?? [] as $item)
    <li>{{ $item->product->name }} - PHP {{ number_format($item->price, 2) }}</li>
    <!-- Display more item details here -->
@endforeach

                    </ul>
                </div>
                <!-- You can add more sections for shipping details, payment information, etc. -->
            </div>
            <hr>
        @endforeach
    </div>
@endsection
