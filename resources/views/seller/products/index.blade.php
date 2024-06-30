@extends('layouts.app')

@section('content')
    <h1>Products</h1>

    <a href="{{ route('products.create') }}">Add Product</a>

    @if(count($products) > 0)
        <ul>
            @foreach($products as $product)
                <li>{{ $product->name }} - ${{ $product->price }}</li>
                <a href="{{ route('products.edit', $product) }}">Edit</a>
                <form action="{{ route('products.destroy', $product) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            @endforeach
        </ul>
    @else
        <p>No products found.</p>
    @endif
@endsection
