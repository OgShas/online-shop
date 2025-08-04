<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
</head>

<div class="container mx-auto">
    <div class="col-12 col-md-4 mb-4">
        <div
            class="bg-white border rounded-lg p-4 flex flex-col items-center text-center max-w-sm mx-auto">
            <img
                class="w-full h-40 object-cover rounded-3 mb-4"
                style="height: 150px"
                src="{{ $product->image_url }}"
                alt="{{ $product->name }}"
            >
            <h5 class="text-lg font-bold">{{ $product->name }}</h5>
            <p class="text-gray-700">{{ $product->description }}</p>
            <p class="text-gray-300 font-bold">{{ $product->price }}</p>
            <form action="{{route('cart.store')}}" method="POST">
                @csrf
                @if(Auth::check() && !Auth::user()->is_admin)
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit">Add to Cart</button>
                @endif
            </form>
            <a href="{{ route('products.index') }}">View All Product</a>
        </div>
    </div>
</div>
