@extends('layouts.app')

@section('title', 'Formal Shoes - StepNStyle')

@section('content')
    <section class="category">
        <div class="container">
            <h2 class="section-title">Formal Shoes</h2>
            <!-- Add content specific to formal shoes category here -->
        </div>
    </section>

    <section class="products">
        <div class="container">
            <h2 class="section-title">Featured Products</h2>
            <div class="product-grid">
            @foreach ($products as $product)
                <div class="product-card">
                    <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="product-image" style="width: 200px; height: 200px;">
                    
                    <h3 class="product-name">{{ $product->name }}</h3>
                    <p class="product-price">PHP {{ number_format($product->price, 2) }}</p>
                    <a href="{{ route('products.show', ['product' => $product->id]) }}" class="product-button">View Details</a>
                    <form action="{{ route('cart.add') }}" method="POST" class="add-to-cart-form">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                        <input type="hidden" name="image" value="{{ $product->image }}">
                     
                        <button type="submit" class="product-add-to-cart-button">Add to Cart</button>
                    </form>
                </div>
            @endforeach
            </div>
        </div>
    </section>
@endsection
