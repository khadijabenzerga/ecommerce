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
            'name' => fake()->name(),
            'price' => fake()->unique()->numberBetween(1,20),
            'description' => fake()->name(),
            'image' => fake()->imageUrl(),
            'stock' => fake()->unique()->numberBetween(1,20),
            'created_at' => fake()->dateTimeBetween('today', '+6 days'),
            'updated_at' => fake()->dateTimeBetween('today', '+6 days'),
            //'remember_token' => Str::random(10),
        ];
    }
}
