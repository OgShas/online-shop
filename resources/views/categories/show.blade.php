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
                src="{{$category->image_url}}"
                alt="{{$category->name}}"
            >
            <h5 class="text-lg font-bold">{{ $category->name }}</h5>
            <p class="text-gray-700">{{ $category->description }}</p>
            <a href="{{ route('categories.index') }}">View All Category</a>
        </div>
    </div>
</div>
