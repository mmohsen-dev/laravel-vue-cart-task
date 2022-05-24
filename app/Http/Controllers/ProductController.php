<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function index(Request $request)
    {
        $userId = auth()->user()->id;
        $cart = Cart::where('user_id', $userId)->first();
        $cartCount = !empty($cart) ? $cart->items->count() : 0;

        $categories = Category::all();

        $products = Product::when($request->search, function ($q) use ($request) {
            return $q->where('name', 'like',  '%' . $request->search . '%');
        })->when($request->category_ids, function ($q) use ($request) {
            return $q->whereIn('category_id', $request->category_ids);
        })->latest()->paginate(8);

        $filters = [
            'category_ids' => !empty($request->category_ids) ? $request->category_ids : [],
            'search' => $request->search
        ];

        return view('products', compact('products', 'categories', 'filters', 'cartCount'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('product', compact('product'));
    }
}
