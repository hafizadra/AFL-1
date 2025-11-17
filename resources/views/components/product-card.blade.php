<div class="card h-100 shadow-sm">
    <div class="card-body p-2">

        <h5 class="card-title fs-6 fw-bold">{{ $product['name'] }}</h5>

        <p class="card-text small mb-1">
            {{ $product['description'] }}
        </p>

        <p class="card-text fw-bold small mb-2">
            Price: Rp {{ number_format($product['price'], 0, ',', '.') }}
        </p>

        <div class="d-flex gap-2">
            <a href="{{ route('products.show', $product['id']) }}" class="btn btn-sm btn-primary">
                View
            </a>

            <a href="{{ route('products.edit', $product['id']) }}" class="btn btn-sm btn-warning">
                Edit
            </a>
        </div>

    </div>
</div>
