@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid" style="width: 200px; height: 200px;">
            </div>
            <div class="col-md-6">
                <h1>{{ $product->name }}</h1>
                <p>{{ $product->description }}</p>
                <p>Price: PHP {{ number_format($product->price, 2) }}</p>
                <form id="add-to-cart-form" action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="name" value="{{ $product->name }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <input type="hidden" name="image" value="{{ $product->image }}"> 
                     <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('add-to-cart-form');
    form.addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent default form submission

        const formData = new FormData(form);
        const url = form.getAttribute('action');

        fetch(url, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Redirect to shop page immediately after clicking "Add to Cart"
            window.location.href = "{{ route('shop.index') }}"; 

            // Show alert
            if (data.success) {
                alert('Product added to cart!');
            } else {
                alert('Failed to add product to cart.');
            }
        })
        .catch(error => {
            // Redirect to shop page immediately after clicking "Add to Cart"
            window.location.href = "{{ route('shop.index') }}"; 

            // Show alert
            alert('Product added to cart!');
        });
    });
});

    </script>
@endsection
