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

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="min-vh-100 d-flex flex-column bg-light">

    {{-- ✅ Global Header (navbar/logo/etc.) --}}
    @include('partials.header')

    {{-- ✅ Optional page-specific header --}}
    @if (isset($header))
        <header class="bg-white shadow">
            <div class="container py-4">
                {{ $header }}
            </div>
        </header>
    @endif

    {{-- ✅ Page content --}}
    <main class="flex-grow-1">
        @yield('content')
    </main>

    {{-- ✅ Global Footer --}}
    @include('partials.footer')

</div>
<script src="https://unpkg.com/vue@3"></script>
</body>
</html>
