<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItems;
use App\Models\Product;
use App\Services\CartServices;
use App\Services\ProductServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function addProduct(Request $request)
    {


        $cartService = new CartServices();
        $cartService->addItems($request->product_id, $request->quantity);

        return response()->json(['message' => 'Item add to cart successfully', 'cartCount' =>  $cartService->countItems()]);
    }

    public function removeProduct(Request $request)
    {

        $cartService = new CartServices();
        $cartService->removeItem($request->itemId);

        return response()->json(['message' => 'Item delete from cart successfully', 'cartCount' =>  $cartService->countItems()]);
    }



    public function CartItems()
    {
        $cartService = new CartServices();
        $cartDetails = $cartService->cartDetails();

        return response()->json([
            'message' => 'data returned successfully',
            'cartItems' => $cartDetails['cartItems'],
            'totalCheckout' => $cartDetails['total']
        ]);
    }

    public function checkoutView()
    {
        $cartService = new CartServices();
        $cartDetails = $cartService->cartDetails();

        return view('checkout', compact('cartDetails'));
    }


    public function checkout()
    {
        $cartService = new CartServices();
        $productServices = new ProductServices();

        $stockShortage = $productServices->stockShortage($cartService->items());

        if (count($stockShortage) > 0) {
            return response()->json(['message' => 'data returned successfully', 'unavailableItems' => $stockShortage]);
        }
        $productServices->deductFromStock($cartService->items());
        $cartService->checkout();

        return response()->json(['message' => 'cart checked successfully']);

    }
}
