<?php

namespace Tests\Unit;

use App\Models\Cart;
use App\Models\CartItems;
use App\Models\Product;
use App\Models\User;
use App\Services\CartServices;
use Tests\TestCase;

class CartTest extends TestCase
{


    public function test_add_to_cart()
    {
        $user = User::factory()->create();
        $cart = Cart::factory()->create(['user_id' => $user->id]);
        $product = Product::factory()->create();

        $this->assertEmpty($cart->items);


        $cartServices = new CartServices($cart);
        $cartServices->addItems($product->id, 5);
        $cart = Cart::find($cart->id);

        $this->assertNotEmpty($cart->items);
        $cartItem = $cart->items->toArray();

        $this->assertContains($product->id, $cartItem[0]);
    }



    public function test_remove_from_cart()
    {
        $user = User::factory()->create();
        $cart = Cart::factory()->create(['user_id' => $user->id]);
        $product = Product::factory()->create();
        $cartItem =CartItems::factory()->create(['cart_id' => $cart->id,'product_id'=>$product->id]);


        $cart = Cart::find($cart->id);
        $this->assertNotEmpty($cart->items);


        $cartServices = new CartServices($cart);
        $cartServices->removeItem($cartItem->id);

        $cart = Cart::find($cart->id);
        $this->assertEmpty($cart->items);
    }
}
