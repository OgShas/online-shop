<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function show()
    {
        $cartItems = Cart::where('user_id', Auth::id())->get();

        return view('checkout.index', compact('cartItems'));
    }

    public function process(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'shipping_address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'postal_code' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ]);

        $cartItems = Cart::where('user_id', Auth::id())->get();

        if ($cartItems->isEmpty()) {
            return redirect()->back()->withErrors('Your cart is empty.');
        }

        $totalAmount = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        $addressParts = [
            $request->shipping_address,
            $request->city,
            $request->state,
            $request->postal_code,
            $request->country,
        ];

        $fullAddress = implode(', ', array_filter($addressParts));

        $order = Order::create([
            'user_id' => Auth::id(),
            'email' => $request->input('email'),
            'shipping_address' => $fullAddress,
            'total_amount' => $totalAmount,
            'status' => 'pending',
            'payment_method' => 'manual',
        ]);

        foreach ($cartItems as $cartItem) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->product->price,
            ]);
        }

        Cart::where('user_id', Auth::id())->delete();

        return redirect()->route('products.index')->with('success', 'Order placed successfully!');
    }
}
