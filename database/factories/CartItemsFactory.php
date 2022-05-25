<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CartItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quantity' => rand(1,5),

        ];
    }
}
