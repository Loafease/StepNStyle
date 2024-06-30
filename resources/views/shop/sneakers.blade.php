@extends('layouts.app')

@section('title', 'Sneakers - StepNStyle')

@section('content')
    <section class="category">
        <div class="container">
            <h2 class="section-title">Sneakers</h2>
            <!-- Add content specific to sneakers category here -->
        </div>
    </section>

    <section class="products">
        <div class="container">
            <h2 class="section-title">Featured Products</h2>
            <div class="product-grid">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text">Price: ${{ $product->price }}</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
@endsection
