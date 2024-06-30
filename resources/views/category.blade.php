@extends('layouts.app')

@section('title', 'Categories - StepNStyle')

@section('content')
    <section class="categories">
        <div class="container">
            <h2 class="section-title">Categories</h2>
            <div class="category-grid">
                <div class="category-card">
                    <img src="path-to-your-category-image.jpg" alt="Category Image" class="category-image">
                    <h3 class="category-name">Sneakers</h3>
                </div>
                <div class="category-card">
                    <img src="path-to-your-category-image.jpg" alt="Category Image" class="category-image">
                    <h3 class="category-name">Formal</h3>
                </div>
                <div class="category-card">
                    <img src="path-to-your-category-image.jpg" alt="Category Image" class="category-image">
                    <h3 class="category-name">Sports</h3>
                </div>
                <div class="category-card">
                    <img src="path-to-your-category-image.jpg" alt="Category Image" class="category-image">
                    <h3 class="category-name">Boots</h3>
                </div>
            </div>
        </div>
    </section>
@endsection
