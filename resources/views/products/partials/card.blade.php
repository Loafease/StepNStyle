<div class="product-card">
    <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="product-card-image">
    <div class="product-card-info">
        <h3 class="product-card-name">{{ $product->name }}</h3>
        <p class="product-card-price">PHP {{ number_format($product->price, 2) }}</p>
        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View Details</a>
    </div>
</div>
