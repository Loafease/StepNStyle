@extends('layouts.app')

@section('content')
    <div class="container">
        
        <div class="row">
            <div class="col-md-6">
                @auth
                    @if (auth()->user()->role === 'buyer')
                        <div class="card">
                            <div class="card-header">
                                <h2>Buyer Dashboard</h2>
                            </div>
                            <div class="card-body">
                                <p>Welcome to the Buyer Dashboard. Here you can manage your purchases and account settings.</p>
                                <a href="#" class="btn btn-primary">View Orders</a>
                                <a href="#" class="btn btn-success">Account Settings</a>
                            </div>
                        </div>
                    @elseif (auth()->user()->role === 'seller')
                        <div class="card">
                            <div class="card-header">
                                <h2>Seller Dashboard</h2>
                            </div>
                            <div class="card-body">
                                <p>Welcome to the Seller Dashboard. Here you can manage your products, orders, and account settings.</p>
                                <a href="#" class="btn btn-primary">View Products</a>
                                <a href="#" class="btn btn-success">Account Settings</a>
                            </div>
                        </div>
                    @endif
                @endauth
            </div>
        </div>
    </div>
@endsection
