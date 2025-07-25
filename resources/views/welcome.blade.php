<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    <main class="flex-grow-1 container d-flex">
        <div class="container">
            <div
                class="hero-section bg-cover-bg-center h-screen flex flex-col items-center justify-start text-white rounded-3"
                style="background-image: url('{{ asset('images/homepage-baner.jpg') }}');
                 background-position: center;
                 background-size: cover; height: 400px; padding-top: 40px;"
            >
                <h1 class="text-center">Quality Tires for Every Drive</h1>
                <p class="text-center">Reliable tires for safety, performance, and all weather conditions.</p>
                <div class="text-center">
                    <a href="<?php echo e(route('products.index')); ?>"
                       class="fs-4 font-bold underline mt-2 text-white text-center">
                        Shop Now
                    </a>
                </div>
            </div>
            <div class="mt-5">
                <h2 class="text-center">Featured Products</h2>
                <div class="row mt-4">
                    @foreach($products as $product)
                        <div class="col-12 col-md-4 mb-4">
                            <div
                                class="bg-white border rounded-lg p-4 flex flex-col items-center text-center max-w-sm mx-auto">
                                <img
                                    class="w-full h-40 object-cover rounded-3 mb-4"
                                    style="height: 150px"
                                    src="{{ $product->image_url }}"
                                    alt="{{ $product->name }}"
                                >
                                <h5 class="text-lg font-medium mb-2">{{ $product->name }}</h5>
                                <p class="text-gray-600 mb-2">{{ $product->description }}</p>
                                <p class="text-blue-600 font-semibold mb-4">{{ $product->price }}</p>
                                <a
                                    href="{{ route('products.show', $product->id) }}"
                                    class="text-sm text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded"
                                >
                                    View Product
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="mt-5">
                <h2 class="mt-4 text-center">Categories</h2>
                <div class="row">
                    @foreach($categories as $category)
                        <div class="col-12 col-md-4 mb-4">
                            <div class="card h-100">
                                <img
                                    src="{{$category->image_url}}"
                                    class="card-img-top"
                                    alt="{{$category->name}}"
                                    style="height: 200px; object-fit: cover;"
                                >
                                <div class="card-body text-center d-flex flex-column">
                                    <h5 class="card-title">{{$category->name}}</h5>
                                    <p class="card-text text-muted">{{$category->description}}</p>
                                    <p class="text-primary font-weight-bold">{{$category->price}}</p>
                                    <a href="{{route('categories.show',$category->id)}}" class="btn btn-primary mt-auto">
                                        View Categories
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center text-sm text-gray-500 dark:text-gray-400 p-3">
        {{ 'this is my footer' }}
    </footer>
</div>
</body>
</html>
