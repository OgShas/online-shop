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

<div class="container mx-auto">
    <h1 class="text-center py-4">Orders controller</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <table class="min-w-full bg-white">
            <thead>
            <tr>
                <th class="py-2 px-4 border-b">Order ID</th>
                <th class="py-2 px-4 border-b">User</th>
                <th class="py-2 px-4 border-b">Total Amount</th>
                <th class="py-2 px-4 border-b">Status</th>
                <th class="py-2 px-4 border-b">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td class="py-2 px-4 border-b">{{$order->id}}</td>
                    <td class="py-2 px-4 border-b">{{$order->user->name}}</td>
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

