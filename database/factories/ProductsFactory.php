<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->word,
            'uuid' => Str::random(16),
            'price' => $this->faker->randomFloat(1, 100, 1000),
            'description' => $this->faker->paragraph,
            'stock' => $this->faker->numberBetween(0, 100),
            'category_id' => $this->faker->numberBetween(1, 10),
            'category' => $this->faker->randomElement(['men', 'women', 'kids', 'accessories']),
            'user_id' => Str::random(10),
            'slug' => $this->faker->slug,
            'weight' => '2kg',
            'dimensions' => '20x20x20',
            'featured_video' => $this->faker->url,
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'visibility' => $this->faker->randomElement(['public', 'private']),
            'sku' => Str::random(8),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
