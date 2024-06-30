
@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <h1>Products</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
    <ul>
        @foreach($products as $product)
            <li>
                <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-secondary">Edit</a>
            </li>
        @endforeach
    </ul>
@endsection
