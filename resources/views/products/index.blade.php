<div class="container mx-auto">
    <h1>Products</h1>
    @foreach($products as $product)
        <div class="bg-white shadow rounded-lg p-3 mb-4">
            <h5 class="text-lg font-bold">{{ $product->title }}</h5>
            <p class="text-gray-700">{{ $product->description }}</p>
            <p class="text-gray-300 font-bold">{{ $product->price }}</p>
            <a href="{{ route('products.show', $product->id) }}">View Product</a>
        </div>
    @endforeach
</div>

