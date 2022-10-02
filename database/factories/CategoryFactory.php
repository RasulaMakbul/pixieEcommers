<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'categoryName' => fake()->word(2),
            'protucts' => fake()->randomNumber(2),
            'image' => fake()->imageUrl(640, 480, 'animals', true),
            'description' => fake()->sentence(3),
        ];
    }
}
