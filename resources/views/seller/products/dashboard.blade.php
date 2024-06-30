@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Seller Dashboard</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Products</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('products.index') }}" class="btn btn-primary">View Products</a>
                        <a href="{{ route('products.create') }}" class="btn btn-success">Add Product</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Orders</h2>
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary">View Orders</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
