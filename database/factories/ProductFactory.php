<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->word,
            'category_id' => \App\Models\Category::factory(),
            'unit' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 1, 100),
        ];
    }
}
