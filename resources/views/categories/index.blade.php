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
    <h1 class="text-center py-4">Categories</h1>
    <div class="row">
        @foreach($categories as $category)
            <div class="col-12 col-md-4 mb-4">
                <div class="card shadow-sm rounded-lg h-100 text-center">
                    <img
                        src="{{ $category->image_url }}"
                        class="card-img-top rounded-3"
                        alt="{{ $category->name }}"
                        style="height: 150px; object-fit: cover;"
                    >
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title fw-bold">{{ $category->name }}</h5>
                            <p class="card-text text-muted">{{ $category->description }}</p>
                        </div>

                        @if(Auth::check() && \Illuminate\Support\Facades\Auth::user()->is_admin)
                            <div class="mt-3">
                                <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-sm btn-outline-primary me-2">Edit Category</a>
                                <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete Category</button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

