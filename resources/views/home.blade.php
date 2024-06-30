@extends('layouts.app')

@section('title', 'Home - StepNStyle')

@section('content')
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Welcome to StepNStyle</h1>
                <p class="hero-subtitle">Discover the latest trends and finest quality footwear for every occasion.</p>
                <a href="{{ route('shop.index') }}" class="hero-button">Explore Collections</a>
            </div>
        </div>
    </section>

    <section class="featured-categories">
        <div class="container">
            <h2 class="section-title">Featured Categories</h2>
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

    <section class="ourcompany">
    <div class="container">
        <h2>Our Company</h2>
        <p>Welcome to StepNStyle - your ultimate destination for trendy fashion!</p>
        <p>At StepNStyle, we believe that fashion is more than just clothing; it's a form of self-expression and confidence. Our mission is to provide you with the latest fashion trends, curated collections, and personalized shopping experiences.</p>
        <p>Whether you're looking for casual wear, formal attire, or accessories to complete your look, we've got you covered. With a wide range of styles, sizes, and price points, there's something for everyone at StepNStyle.</p>
        <p>Join us on this fashion journey and discover the perfect pieces to elevate your style and express your unique personality.</p>
        <p>Thank you for choosing StepNStyle - where fashion meets passion!</p>
    </div>
</section>

@endsection
