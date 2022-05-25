<?php

namespace App\Services;

use App\Models\Cart;
use App\Models\CartItems;

class CartServices
{

    protected $cart;


    public function __construct($cart = NULL)
    {
        $this->cart =  !empty($cart) ? $cart : Cart::firstOrCreate(['user_id' => auth()->user()->id]);
    }


    public  function addItems($productId, $quantity)
    {
        $existedItem = CartItems::where('cart_id', $this->cart->id)->where('product_id', $productId)->first();
        if ($existedItem) {
            $existedItem->update(['quantity' => $existedItem->quantity + $quantity]);
        } else {
            CartItems::create([
                'cart_id' => $this->cart->id,
                'product_id' => $productId,
                'quantity' => $quantity
            ]);
        }
    }

    public function removeItem($itemId)
    {
        CartItems::where('id', $itemId)->delete();

    }

    public function cartDetails()
    {

        $cartItems = [];
        $totalCheckout = 0;

        $cart = Cart::where('id', $this->cart->id)->with('items.product')->first();

        if (!empty($cart)) {

            foreach ($this->cart->items as $item) {
                $cartItems[] = [
                    'id' => $item->id,
                    'name' => $item->product->name,
                    'price' => $item->product->price,
                    'img' => $item->product->img,
                    'quantity' => $item->quantity,
                    'item_total_price' => $item->product->price * $item->quantity,

                ];
                $totalCheckout = ($item->product->price * $item->quantity) + $totalCheckout;
            }
        }
        return ['cartItems' => $cartItems, 'total' => $totalCheckout];
    }



    public  function countItems()
    {
        return CartItems::where('cart_id', $this->cart->id)->count();
    }

    public function items()
    {
        return $this->cart->items;
    }



    public function checkout()
    {
        $this->cart->update(['checked' => date('Y-m-d H:i:s')]);
    }
}
