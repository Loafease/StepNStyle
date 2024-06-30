@extends('layouts.app')

@section('title', 'Create Order')

@section('content')
    <div class="container">
        <h1>Create Order</h1>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('orders.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="customer_name">Customer Name</label>
                <input type="text" id="customer_name" name="customer_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="order_date">Order Date</label>
                <input type="date" id="order_date" name="order_date" class="form-control" required>
            </div>
            <!-- Add more form fields as needed -->
            <button type="submit" class="btn btn-primary">Create Order</button>
        </form>
    </div>
@endsection
