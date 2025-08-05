<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $orders = Order::all(); // for admin
        $cartItems = Cart::with('product')->where('user_id', Auth::id())->get();

        return view('dashboard', compact('orders', 'cartItems'));
    }
}
