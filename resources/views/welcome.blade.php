<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tyre Shop</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
</head>
<body class="antialiased">
<div
    class="min-vh-100 bg-center bg-gray-100 dark:bg-gray-900 selection:bg-red-500 selection:text-white d-flex flex-column"
>
    <!-- Header -->
    <header>
        <div
            class="container-fluid d-flex justify-content-between align-items-center p-3 sticky-top shadow-sm bg-white mb-4">
            <div class="d-flex flex-column align-items-center ms-lg-4">
                <a href="{{ url('/') }}" class="text-decoration-none">
                    <img
                        src="{{ asset('images/logo.png') }}"
                        alt="Shop Cars Logo"
                        class="rounded"
                        style="height: 50px; width: 50px"
                    />
                </a>
                <div class="mt-1 text-center text-muted fw-semibold">

                </div>
            </div>

            @if (Route::has('login'))
                <div class="d-flex align-items-center gap-3 me-lg-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="fw-semibold text-dark text-decoration-none"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="fw-semibold text-dark text-decoration-none"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="fw-semibold text-dark text-decoration-none"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow-1 container py-4">
        <!-- Hero Section -->
        <div
            class="hero-section text-white rounded-3 mb-5"
            style="background-image: url('{{ asset('images/homepage-baner.jpg') }}');
               background-position: center;
               background-size: cover;
               height: 400px;
               padding-top: 100px;">
            <div class="text-center bg-dark bg-opacity-50 p-4 rounded">
                <h1 class="display-5 fw-bold">Quality Tires for Every Drive</h1>
                <p class="lead">Reliable tires for safety, performance, and all weather conditions.</p>
                <a href="{{ route('products.index') }}" class="btn btn-outline-light mt-2 px-4 py-2">Shop Now</a>
            </div>
        </div>

        <!-- Featured Products -->
        <section class="mb-5">
            <h2 class="text-center mb-4">Featured Products</h2>
            <div class="row g-4">
                @foreach($products as $product)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <img
                                src="{{ $product->image_url }}"
                                class="card-img-top"
                                alt="{{ $product->name }}"
                                style="height: 180px; object-fit: cover;"
                            >
                            <div class="card-body d-flex flex-column text-center">
                                <h5 class="card-title fw-semibold">{{ $product->name }}</h5>
                                <p class="card-text text-muted">{{ $product->description }}</p>
                                <p class="text-primary fw-bold mb-3">{{ $product->price }}</p>
                                <a href="{{ route('products.show', $product->id) }}"
                                   class="btn btn-primary mt-auto">
                                    View Product
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Categories -->
        <section class="mb-5">
            <h2 class="text-center mb-4">Categories</h2>
            <div class="row g-4">
                @foreach($categories as $category)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <img
                                src="{{ $category->image_url }}"
                                class="card-img-top"
                                alt="{{ $category->name }}"
                                style="height: 180px; object-fit: cover;"
                            >
                            <div class="card-body d-flex flex-column text-center">
                                <h5 class="card-title fw-semibold">{{ $category->name }}</h5>
                                <p class="card-text text-muted">{{ $category->description }}</p>
                                <a href="{{ route('categories.show', $category->id) }}"
                                   class="btn btn-outline-primary mt-auto">
                                    View Category
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="text-center text-sm text-gray-500 dark:text-gray-400 p-3">
        {{ 'this is my footer' }}
    </footer>
</div>
</body>
</html>
