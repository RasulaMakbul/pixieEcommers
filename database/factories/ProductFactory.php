<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'productName' => fake()->word(2),
            'categoryName' => fake()->word(2),
            'unitPrice' => fake()->randomNumber(2),
            'stock' => fake()->randomNumber(2),
            'image' => fake()->imageUrl(640, 480, 'animals', true),
            'visibility' => fake()->boolean(),
            'description' => fake()->sentence(3),
        ];
    }
}
