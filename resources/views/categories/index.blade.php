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
    <h1 class="text-center py-4">Categories</h1>
    @foreach($categories as $category)
        <div class="col-12 col-md-4 mb-4 text-center">
            <div class="bg-white shadow rounded-lg p-3 mb-4">
                <img class="w-full h-48 object-cover rounded-3"
                     style="height: 150px"
                     src="{{$category->image_url}}"
                     alt="{{$category->name}}"
                >
                <div class="bg-white shadow rounded-lg p-3 mb-4">
                    <h5 class="text-lg font-bold">{{ $category->name }}</h5>
                    <p class="text-gray-700">{{ $category->description }}</p>
                    <a href="{{ route('admin.category.edit', $category->id) }}">Edit Category</a>
                    <form action="{{route('admin.category.destroy', $category->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete Product</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
