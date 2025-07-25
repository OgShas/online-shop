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
        <div class="container-fluid d-flex justify-content-between align-items-center p-3 sticky-top shadow-sm bg-white mb-4">
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
            <div class="hero-section bg-cover-bg-center h-screen flex flex-col items-center justify-start text-white rounded-3"
                 style="background-image: url('{{ asset('images/homepage-baner.jpg') }}');
                 background-position: center;
                 background-size: cover; height: 400px; padding-top: 40px;"
            >
                <h1 class="text-center">Quality Tyres for Every Drive</h1>
                <p class="text-center">Reliable tyres for safety, performance, and all weather conditions.</p>
                <div class="text-center">
                    <a href="<?php echo e(route('products.index')); ?>" class="fs-4 font-bold underline mt-2 text-white text-center">
                        Shop Now
                    </a>
                </div>
            </div>
            <div class="mt-8">
                <h2>Featured Products</h2>
                <div class="grid grid-cols-2 d-lg-grid-cols-4 gap-6">
                    @foreach($products as $product)
                        <h5>{{$product->name}}</h5>
                        <p>{{$product->description}}</p>
                        <p>{{$product->price}}</p>
                        <a href="{{ route('products.show', $product->id) }}">View Product</a>
                    @endforeach
                </div>
            </div>
            <div class="mt-8">
                <h2>Categories</h2>
                <div class="grid grid-cols-2 d-lg-grid-cols-4 gap-6">
                    @foreach($categories as $category)
                        <h5>{{$category->name}}</h5>
                        <p>{{$category->description}}</p>
                        <p>{{$category->price}}</p>
                        <a href="{{route('categories.show',$category->id)}}">View Categories</a>
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
