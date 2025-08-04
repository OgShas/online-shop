@php use Illuminate\Support\Facades\Auth; @endphp
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

<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    {{ __('Dashboard') }}
</h2>
@if(Auth::check() && Auth::user()->is_admin)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="min-w-full bg-white">
                        <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Order ID</th>
                            <th class="py-2 px-4 border-b">Total Amount</th>
                            <th class="py-2 px-4 border-b">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td class="py-2 px-4 border-b">{{$order->id}}</td>
                                <td class="py-2 px-4 border-b">{{$order->total_amount}}</td>
                                <td class="py-2 px-4 border-b">{{ucfirst($order->status)}}</td>
                                <td class="py-2 px-4 border-b">
                                    <a href="#">Edit</a>
                                    <a href="#">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endif
@if (Auth::check())
    <div class="container mt-4">
        <div class="d-flex flex-column gap-3 flex-wrap">

            <a href="{{ url('/products') }}" class="btn btn-outline-primary btn-lg px-4">
                🛒 Go to Products
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-outline-danger btn-lg px-4">
                    🔓 Log Out
                </button>
            </form>

        </div>
    </div>
@endif

