<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function addToCart()
    {
        $user = User::factory()->create(['id'=>1, 'email'=> '', 'password' => '123']);
        $response = $this->actingAs($user)->post('/add-product',['productId' => 1]);


        $response->assertStatus(200);
        $this->assertDatabaseHas('cart_items', ['product_id' => 1, 'user_id' => 1]);

    }
}
