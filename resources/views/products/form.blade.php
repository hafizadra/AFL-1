@php
    $isEdit = isset($product);
@endphp

<x-layout :title="$isEdit ? 'Edit Product' : 'Add New Product'">
    <h1 class="h3 mb-3">
        {{ $isEdit ? 'Edit Product' : 'Add New Product' }}
    </h1>

    <form
        action="{{ $isEdit ? route('products.update', $product['id']) : route('products.store') }}"
        method="POST"
        class="card p-3"
    >
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input
                type="text"
                id="name"
                name="name"
                class="form-control"
                value="{{ old('name', $isEdit ? $product['name'] : '') }}"
                required
            >
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea
                id="description"
                name="description"
                class="form-control"
                rows="4"
            >{{ old('description', $isEdit ? $product['description'] : '') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input
                type="number"
                id="price"
                name="price"
                class="form-control"
                min="0"
                step="1000"
                value="{{ old('price', $isEdit ? $product['price'] : '') }}"
                required
            >
        </div>

        <button type="submit" class="btn btn-primary">
            {{ $isEdit ? 'Update' : 'Submit' }}
        </button>
    </form>
</x-layout>
