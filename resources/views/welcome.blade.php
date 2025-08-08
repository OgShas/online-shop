<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<body class="antialiased">
<div
    class="min-vh-100 bg-center bg-gray-100 dark:bg-gray-900 selection:bg-red-500 selection:text-white d-flex flex-column"
>
    <!-- Header -->
    @extends('layouts.app')

    @section('content')
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
            <!-- Weather Check Form -->
            <section class="mb-5">
                <h2 class="text-center mb-4">Check Weather by Country</h2>
                <form id="weatherForm" class="d-flex justify-content-center gap-2 flex-wrap">
                    <input
                        type="text"
                        name="country"
                        placeholder="Enter country"
                        class="form-control form-control-lg"
                        style="max-width: 400px;"
                        required
                    >
                    <button type="submit" class="btn btn-primary btn-lg">Check Weather</button>
                </form>
            </section>
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
</div>
</body>
@endsection
</html>
