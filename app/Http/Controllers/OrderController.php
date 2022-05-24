<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{



    public function placeOrder($cartId)
    {
        $cart = Cart::find($cartId);
        $cartItems = $cart->items;
        $order = Order::create(['userId' => $cart->user_id]);
        $orderItems = [];
        foreach ($cartItems as $item) {
            $orderItems[] = [
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'price' => $item->product->price,
            ];
        }
        $order->items()->createMany($orderItems);
        $cart->delete();
    }
}
