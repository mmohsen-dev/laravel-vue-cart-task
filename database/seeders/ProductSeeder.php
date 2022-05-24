<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            ['name' => 'Pizza margarita', 'price' => rand(100, 200), 'stock' => rand(10, 20), 'img' => 'pizza.png',  'category_id' => 1, 'created_at' => now()],
            ['name' => 'Pizza beef',      'price' => rand(100, 200), 'stock' => rand(10, 20), 'img' => 'pizza.png',  'category_id' => 1, 'created_at' => now()],
            ['name' => 'Pizza cheese',    'price' => rand(100, 200), 'stock' => rand(10, 20), 'img' => 'pizza.png',  'category_id' => 1, 'created_at' => now()],
            ['name' => 'Pizza turkey',    'price' => rand(100, 200), 'stock' => rand(10, 20), 'img' => 'pizza.png',  'category_id' => 1, 'created_at' => now()],
            ['name' => 'Pizza smoke',     'price' => rand(100, 200), 'stock' => rand(10, 20), 'img' => 'pizza.png',  'category_id' => 1, 'created_at' => now()],
            ['name' => 'Fried chicken 1', 'price' => rand(100, 200), 'stock' => rand(10, 20), 'img' => 'fried-chicken.jpg',  'category_id' => 2, 'created_at' => now()],
            ['name' => 'Fried chicken 2', 'price' => rand(100, 200), 'stock' => rand(10, 20), 'img' => 'fried-chicken.jpg',  'category_id' => 2, 'created_at' => now()],
            ['name' => 'Fried chicken 3', 'price' => rand(100, 200), 'stock' => rand(10, 20), 'img' => 'fried-chicken.jpg',  'category_id' => 2, 'created_at' => now()],
            ['name' => 'Beef burger 1',   'price' => rand(100, 200), 'stock' => rand(10, 20), 'img' => 'burger.jpg',  'category_id' => 3, 'created_at' => now()],
            ['name' => 'Beef burger 2',   'price' => rand(100, 200), 'stock' => rand(10, 20), 'img' => 'burger.jpg',  'category_id' => 3, 'created_at' => now()],
            ['name' => 'Beef burger 3',   'price' => rand(100, 200), 'stock' => rand(10, 20), 'img' => 'burger.jpg',  'category_id' => 3, 'created_at' => now()],


        ];
        Product::insert($data);
    }
}
