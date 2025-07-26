<div class="container mx-auto mt-5">
    <h1>Checkout</h1>

    @if(session('success'))
        <p class="text-green-600">{{ session('success') }}</p>
    @endif

    @if($errors->any())
        <ul class="text-red-600">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('checkout.process') }}" method="POST" id="checkout-form">
        @csrf

        <div class="mb-4">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div class="mb-4">
            <label for="shipping_address">Street Address</label>
            <input type="text" name="shipping_address" id="shipping_address" required>
        </div>

        <div class="mb-4">
            <label for="city">City</label>
            <input type="text" name="city" id="city" required>
        </div>

        <div class="mb-4">
            <label for="state">State</label>
            <input type="text" name="state" id="state" required>
        </div>

        <div class="mb-4">
            <label for="postal_code">Postal Code</label>
            <input type="text" name="postal_code" id="postal_code" required>
        </div>

        <div class="mb-4">
            <label for="country">Country</label>
            <input type="text" name="country" id="country" required>
        </div>

        <div class="mb-4">
            <h2>Order Summary</h2>
            <ul>
                @foreach($cartItems as $cartItem)
                    <li>{{ $cartItem->product->name }} x {{ $cartItem->quantity }} -
                        ${{ $cartItem->product->price * $cartItem->quantity }}</li>
                @endforeach
            </ul>
            @php
                $total = $cartItems->sum(function ($item) {
                    return $item->product->price * $item->quantity;
                });
            @endphp
            <p>Total: ${{ $total }}</p>
        </div>

        <div class="mb-4">
            <button type="submit">Submit Order</button>
        </div>
    </form>
</div>
