@extends('layouts.app')

@section('title', 'Edit Product - StepNStyle')

@section('content')
<section class="product-form">
    <div class="container">
        <h2 class="section-title">Edit Product</h2>
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $product->name }}" required>
            </div>
            <div class="form-group">
                <label for="price">Product Price</label>
                <input type="number" id="price" name="price" class="form-control" value="{{ $product->price }}" required>
            </div>
            <div class="form-group">
                <label for="description">Product Description</label>
                <textarea id="description" name="description" class="form-control" required>{{ $product->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Product Image</label>
                <input type="file" id="image" name="image" class="form-control">
                @if ($product->image)
                    <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="img-thumbnail mt-2" style="max-width: 200px;">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
</section>
@endsection
