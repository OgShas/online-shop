<header>
    <div class="container-fluid d-flex justify-content-between align-items-center p-3 sticky-top shadow-sm bg-white mb-4">
        <a href="{{ url('/') }}" class="text-decoration-none">
            <img src="{{ asset('images/logo.png') }}" alt="Shop Cars Logo" class="rounded" style="height: 50px; width: 50px"/>
        </a>

        @auth
            <div class="d-flex gap-3">
                <a href="{{ url('/dashboard') }}" class="btn btn-outline-secondary">Dashboard</a>
                <a href="{{ url('/products') }}" class="btn btn-outline-primary">Go to Products</a>
                <a href="{{ url('/cart') }}" class="btn btn-outline-success">🛒 My Cart</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger">🔓 Log Out</button>
                </form>
            </div>
        @else
            <div class="d-flex gap-3">
                <a href="{{ route('login') }}" class="btn btn-outline-primary">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-outline-secondary">Register</a>
                @endif
            </div>
        @endauth
    </div>
</header>
