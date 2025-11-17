<x-layout title="Products List">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">Products List</h1>

        <a href="{{ route('products.create') }}" class="btn btn-success">
            Add new product
        </a>
    </div>

    @if (count($products))
        <div class="row">
    @foreach ($products as $product)
        <div class="col-md-3 col-sm-6 mb-4">
            <x-product-card :product="$product" />
        </div>
    @endforeach
</div>

    @else
        <p>No products found.</p>
    @endif
</x-layout>
