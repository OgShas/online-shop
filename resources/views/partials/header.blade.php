<header>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top mb-4">
        <div class="container-fluid">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="navbar-brand">
                <img src="{{ asset('images/logo.png') }}" alt="Shop Cars Logo" class="rounded" style="height: 50px; width: 50px;">
            </a>

            <!-- Hamburger (mobile) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                    aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Content -->
            <div class="collapse navbar-collapse" id="mainNavbar">
                @auth
                    <ul class="navbar-nav ms-auto gap-2 align-items-center w-100">

                        @if(Auth::check() && !Auth::user()->is_admin)
                            <!-- REGULAR USERS ONLY -->
                            <li class="nav-item w-100 w-md-auto">
                                <a href="{{ url('/dashboard') }}" class="btn btn-outline-secondary w-100 w-md-auto">
                                    📊 Dashboard
                                </a>
                            </li>

                            <li class="nav-item w-100 w-md-auto">
                                <a href="{{ url('/products') }}" class="btn btn-outline-primary w-100 w-md-auto">
                                    🛍️ Go to Products
                                </a>
                            </li>

                            <li class="nav-item w-100 w-md-auto">
                                <a href="{{ url('/cart') }}" class="btn btn-outline-success w-100 w-md-auto">
                                    🛒 My Cart
                                </a>
                            </li>
                        @else
                            <!-- ADMIN USERS ONLY -->
                            <li class="nav-item w-100 w-md-auto">
                                <a href="{{ url('/dashboard') }}" class="btn btn-outline-secondary w-100 w-md-auto">
                                    Dashboard
                                </a>
                            </li>

                            <li class="nav-item w-100 w-md-auto">
                                <a href="{{ url('/products') }}" class="btn btn-outline-primary w-100 w-md-auto">
                                    Go to Products
                                </a>
                            </li>
                        @endif

                        <!-- Common: Logout -->
                        <li class="nav-item w-100 w-md-auto">
                            <form method="POST" action="{{ route('logout') }}" class="w-100">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger w-100 w-md-auto">
                                    🔓 Log Out
                                </button>
                            </form>
                        </li>
                    </ul>
                @else
                    <!-- GUESTS -->
                    <ul class="navbar-nav ms-auto gap-2 align-items-center w-100">
                        <li class="nav-item w-100 w-md-auto">
                            <a href="{{ route('login') }}" class="btn btn-outline-primary w-100 w-md-auto">🔑 Log in</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item w-100 w-md-auto">
                                <a href="{{ route('register') }}" class="btn btn-outline-secondary w-100 w-md-auto">📝 Register</a>
                            </li>
                        @endif
                    </ul>
                @endauth
            </div>
        </div>
    </nav>
</header>
