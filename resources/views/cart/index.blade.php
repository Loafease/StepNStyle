@extends('layouts.app')

@section('title', 'Cart - StepNStyle')

@section('content')

<section class="cart">
    <div class="container">
        <h2 class="section-title">Your Cart</h2>
        <div class="cart-items">
            @foreach ($cartItems as $item)
                <div class="cart-item">
                    <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['name'] }}" class="cart-item-image">
                    <div class="cart-item-details">
                        <h3 class="cart-item-name">{{ $item['name'] }}</h3>
                        <p class="cart-item-price">PHP {{ number_format($item['price'], 2) }}</p>
                        <div class="cart-item-quantity">
                            <form action="{{ route('cart.update', $item['id']) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <label for="quantity">Quantity:</label>
                                <input type="number" id="quantity" name="quantity" value="{{ $item['quantity'] }}" min="1">
                                <label for="size">Size:</label>
                                <select name="size" id="size">
                                    @foreach ($sizes as $size)
                                        <option value="{{ $size }}" {{ $size == $item['size'] ? 'selected' : '' }}>{{ $size }}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="cart-item-update">Update</button>
                            </form>
                        </div>
                    </div>
                    <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="cart-item-remove">Remove</button>
                    </form>
                </div>
            @endforeach
        </div>
        <div class="cart-summary">
            <h3 class="cart-summary-title">Order Summary</h3>
             <p class="cart-summary-text">Total: PHP {{ number_format($total, 2) }}</p>
            <a href="{{ route('checkout.index') }}" class="cart-checkout-button">Proceed to Checkout</a>
            <a href="{{ route('shop.index') }}" class="cart-continue-shopping-button">Continue Shopping</a>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <p class="footer-text">&copy; 2024 StepNStyle. All rights reserved.</p>
    </div>
</footer>
@endsection

