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
    <h1 class="text-center py-4">Edit Category</h1>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-4">
            <label for="name" class="text-gray-400">Category Name</label>
            <input type="text" name="name" id="name" value="{{ $category->name }}" class="w-full border rounded-3">
        </div>

        <div class="mb-4">
            <label for="description" class="text-gray-400">Product Description</label>
            <textarea name="description" id="description" class="w-full border rounded-3">{{ $product->description }}</textarea>
        </div>

        <div class="mb-4">
            <label for="image_url" class="text-gray-400">Image Url</label>
            <input type="text" name="image_url" id="image_url" value="{{ $category->image_url }}" class="w-full border rounded-3">
        </div>

        <button type="submit">Update</button>
    </form>

</div>
