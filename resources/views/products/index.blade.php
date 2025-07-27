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
    <h1 class="text-center py-4">Products</h1>
    @foreach($products as $product)
        <div class="col-12 col-md-4 mb-4 text-center">
            <div class="bg-white shadow rounded-lg p-3 mb-4">
                <img class="w-full h-48 object-cover rounded-3"
                     style="height: 150px"
                     src="{{$product->image_url}}"
                     alt="{{$product->name}}"
                >
                <h5 class="text-lg font-bold">{{ $product->title }}</h5>
                <p class="text-gray-700">{{ $product->description }}</p>
                <p class="text-gray-300 font-bold">{{ $product->price }}</p>
                <a href="{{ route('products.show', $product->id) }}">View Product</a>
            </div>
        </div>
        @if(Auth::check() && \Illuminate\Support\Facades\Auth::user()->is_admin)
            <a href="{{route('admin.products.edit',$product->id)}}">Edit Product</a>
            <form action="{{route('admin.products.destroy', $product->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete Product</button>
            </form>
        @endif
    @endforeach
</div>

