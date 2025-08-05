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

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card shadow-sm border rounded-lg text-center">
                <img
                    src="{{ $category->image_url }}"
                    class="card-img-top rounded-3"
                    alt="{{ $category->name }}"
                    style="height: 150px; object-fit: cover;"
                >
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $category->name }}</h5>
                    <p class="card-text text-muted">{{ $category->description }}</p>
                    <a href="{{ route('categories.index') }}" class="btn btn-outline-secondary btn-sm">View All Categories</a>
                </div>
            </div>
        </div>
    </div>
</div>

