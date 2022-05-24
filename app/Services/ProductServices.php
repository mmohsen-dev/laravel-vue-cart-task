<?php

namespace App\Services;

use App\Models\Product;

class ProductServices
{

    protected $products;


    public function __construct($products = NULL)
    {
        $this->products = $products;
    }


    public function stockShortage($items)
    {
        $Shortage = [];
        foreach ($items as $item) {
            $product = Product::select('id', 'stock')->where('id', $item->product_id)->first()->toArray();
            $available = $product['stock'] - $item->quantity;  //negative mean no enough stock
            if ($available < 0) {
                $Shortage[] = $product;
            }
        }
        return $Shortage;
    }


    public function deductFromStock($items)
    {
        foreach ($items as $item) {
            $product = Product::select('id', 'stock')->where('id', $item->product_id)->first();
            $product->update(['stock' => $product->stock - $item->quantity]);
        }
        return true;
    }
}
