<div class="container mx-auto">
    <h1>Shopping cart</h1>
    @if ($message = Session::get('success'))
        <div class="bg-green-50 text-center">
            {{$message}}
        </div>
    @endif

    @if($cartItems->isEmpty())
        <p class="text-gray-50">
            Your Cart is empty
        </p>
    @else
        <table class="min-w-full bg-white">
            <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cartItems as $cartItem)
                <tr>
                    <td>{{$cartItems->product->name}}</td>
                    <td>
                        <form
                            action="{{route('cart.update',$cartItem->id)}}"
                            method="POST"
                        >
                            @csrf
                            @method('PATCH')
                            <input type="number" name="quantity" value="{{$cartItem->quantity}}">
                            <button type="submit">Update</button>
                        </form>
                    </td>
                    <td>{{$cartItem->product->price}}</td>
                    <td>{{$cartItem->product->price * $cartItem->quantity}}</td>
                    <td>
                        <form
                            action="{{route('cart.destroy',$cartItem->id)}}"
                            method="POST"
                        >
                            @csrf
                            @method('DELETE')
                            <button type="submit">Remove</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            <a href="#">Process To Checkout</a>
        </div>
    @endif
</div>
