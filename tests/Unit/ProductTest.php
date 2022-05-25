<?php

namespace Tests\Unit;

use App\Models\CartItems;
use App\Models\Product;
use App\Services\ProductServices;
use Tests\TestCase;
use stdClass;

class ProductTest extends TestCase
{

    public function test_no_enough_stock_return_on_unavailable_product()
    {
        $product = Product::factory()->create(['stock' => 0])->toArray();
        $item = CartItems::factory()->create(['quantity' => 2, 'product_id' => $product['id'], 'cart_id' => 1]);


        $productServices = new ProductServices();
        $unavailableProducts =  $productServices->stockShortage([$item]);
        $this->assertEquals($unavailableProducts[0]['id'], $product['id']);
    }



    public function test_available_product_not_returend_no_unavailable_product()
    {
        $product = Product::factory()->create(['stock' => 10])->toArray();
        $item = CartItems::factory()->create(['quantity' => 5, 'product_id' => $product['id'], 'cart_id' => 1]);


        $productServices = new ProductServices();
        $unavailableProducts =  $productServices->stockShortage([$item]);
        $this->assertEmpty($unavailableProducts);
    }

    

    public function test_deduct_from_product_stock()
    {
        $product = Product::factory()->create(['stock' => 10])->toArray();
        $item = CartItems::factory()->create(['quantity' => 5, 'product_id' => $product['id'], 'cart_id' => 1]);

        $productServices = new ProductServices();
        $productServices->deductFromStock([$item]);

        $productWithNewStock = Product::find($item->product_id);

        $this->assertEquals($productWithNewStock->stock, 5);
    }
}
