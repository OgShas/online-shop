@extends('layouts.app')

@section('content')

    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Dashboard') }}
    </h2>

    {{-- Admin Section --}}
    @if(Auth::check() && Auth::user()->is_admin)
        <a href="{{ url('/admin/orders') }}" class="btn btn-primary me-2">Manage Orders</a>
        <a href="{{ url('/admin/users') }}" class="btn btn-secondary">Manage Users</a>
    @endif

    {{-- Cart Section for all users (including admins) --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-bold mb-4">Your Cart</h3>
                    @if($cartItems->isEmpty())
                        <p>Your cart is empty.</p>
                    @else
                        <table class="min-w-full bg-white">
                            <thead>
                            <tr>
                                <th class="py-2 px-4 border-b">Product</th>
                                <th class="py-2 px-4 border-b">Price</th>
                                <th class="py-2 px-4 border-b">Quantity</th>
                                <th class="py-2 px-4 border-b">Subtotal</th>
                                <th class="py-2 px-4 border-b">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cartItems as $item)
                                <tr>
                                    <td class="py-2 px-4 border-b">{{ $item->product->name }}</td>
                                    <td class="py-2 px-4 border-b">${{ number_format($item->product->price, 2) }}</td>
                                    <td class="py-2 px-4 border-b">{{ $item->quantity }}</td>
                                    <td class="py-2 px-4 border-b">${{ number_format($item->product->price * $item->quantity, 2) }}</td>
                                    <td class="py-2 px-4 border-b">
                                        <form method="POST" action="{{ route('cart.update', $item->id) }}">
                                            @csrf
                                            @method('PATCH')
                                            <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" style="width: 60px;">
                                            <button type="submit" class="ml-2 text-blue-500">Update</button>
                                        </form>

                                        <form method="POST" action="{{ route('cart.destroy', $item->id) }}" class="mt-1">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500">Remove</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
