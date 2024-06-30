@extends('layouts.app')

@section('title', 'Boots - StepNStyle')

@section('content')
    <section class="category">
        <div class="container">
            <h2 class="section-title">Boots</h2>
            <!-- Add content specific to boots category here -->
        </div>
    </section>

    <section class="products">
        <div class="container">
            <h2 class="section-title">Featured Products</h2>
            <div class="product-grid">
                @foreach ($featuredProducts as $product)
                    <div class="product-card">
                        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="product-image">
                        <h3 class="product-name">{{ $product->name }}</h3>
                        <p class="product-price">PHP {{ number_format($product->price, 2) }}</p>
                        <p class="product-size">Size: {{ $product->size }}</p> 
                        <a href="{{ route('products.show', ['product' => $product->id]) }}" class="product-button">View Details</a>
                        <form action="{{ route('cart.add') }}" method="POST" class="add-to-cart-form">
                            @csrf
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->name }}">
                            <input type="hidden" name="price" value="{{ $product->price }}">
                            <input type="hidden" name="image" value="{{ $product->image }}">
                            <div class="form-group">
                                <label for="size">Size:</label>
                                <input type="text" id="size" name="size" class="form-control" placeholder="Enter your size">
                            </div>
                            <button type="submit" class="product-add-to-cart-button">Add to Cart</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
