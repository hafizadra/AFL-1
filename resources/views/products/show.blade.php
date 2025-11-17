<x-layout title="Product Detail">
    <h1 class="h3 mb-3">Product Detail</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $product['name'] }}</h5>
            <p class="card-text">{{ $product['description'] }}</p>
            <p class="card-text fw-bold">
                Price: Rp {{ number_format($product['price'], 0, ',', '.') }}
            </p>

            <a href="{{ route('products') }}" class="btn btn-secondary me-2">
                Back to list
            </a>

            <a href="{{ route('products.edit', $product['id']) }}" class="btn btn-warning">
                Edit
            </a>
        </div>
    </div>
</x-layout>
