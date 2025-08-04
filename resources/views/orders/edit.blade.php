@php use App\Models\Category; @endphp
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
    <h1 class="text-center py-4">Edit Order</h1>
    <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-4">
            <label for="status" class="black text-gray-700">Order Status</label>

            <select name="status" id="status" class="w-full bordere rounded p-2">
                <option value="pending"{{$order->status=='pending' ? 'selected': '' }}>Pending</option>
                <option value="pending"{{$order->status=='completed' ? 'selected': '' }}>Completed</option>
                <option value="pending"{{$order->status=='canceled' ? 'canceled': '' }}>Canceled</option>
            </select>
        </div>
        <button type="submit">Update Order</button>
    </form>
</div>
