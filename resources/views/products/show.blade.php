<div class="container mx-auto">
    <div class="bg-white shadow rounded-lg p-3 mb-4">
        <h5 class="text-lg font-bold">{{ $product->name }}</h5>
        <p class="text-gray-700">{{ $product->description }}</p>
        <p class="text-gray-300 font-bold">{{ $product->price }}</p>
        <a href="{{ route('products.index') }}">View All Product</a>
    </div>
</div>
