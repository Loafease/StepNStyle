
@extends('layouts.app')

@section('title', 'Shop - StepNStyle')

@section('content')
    <section class="hero">
        <h1 class="hero-title">Shop Our Latest Collection</h1>
        <p class="hero-subtitle">Find the perfect pair for every occasion.</p>
    </section>

    <section class="categories">
        <div class="container">
            <h2 class="section-title">Categories</h2>
            <div class="category-grid">
                <div class="category-card">
                    <a href="{{ route('shop.category', ['category' => 'sneakers']) }}">
                    <img src="images/sneaker.jpeg" alt="Sneakers" class="category-image" style="width: 200px; height: 200px;">
                        <h3 class="category-name">Sneakers</h3>
                    </a>
                </div>
                <div class="category-card">
                    <a href="{{ route('shop.category', ['category' => 'formal']) }}">
                        <img src="images/formal.jpeg" alt="Formal" class="category-image" style="width: 200px; height: 200px;">
                        <h3 class="category-name">Formal</h3>
                    </a>
                </div>
                <div class="category-card">
                    <a href="{{ route('shop.category', ['category' => 'sports']) }}">
                        <img src="images/sports.jpeg" alt="Sports" class="category-image" style="width: 200px; height: 200px;">
                        <h3 class="category-name">Sports</h3>
                    </a>
                </div>
                <div class="category-card">
                    <a href="{{ route('shop.category', ['category' => 'boots']) }}">
                        <img src="images/boots.jpeg" alt="Boots" class="category-image" style="width: 200px; height: 200px;">
                        <h3 class="category-name">Boots</h3>
                    </a>
                </div>
            </div>
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

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.add-to-cart-form').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission

                var form = $(this);
                var formData = form.serialize();

                $.ajax({
                    type: 'POST',
                    url: form.attr('action'),
                    data: formData,
                    success: function(response) {
                        alert('Product added to cart!');
                    },
                    error: function(response) {
                        alert('An error occurred. Please try again.');
                    }
                });
            });
        });
    </script>
@endsection
