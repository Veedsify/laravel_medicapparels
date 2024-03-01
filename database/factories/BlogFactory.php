<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Blog;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'meta_title' => $this->faker->sentence,
            'meta_description' => $this->faker->paragraph(1, true),
            'meta_keywords' => $this->faker->sentence,
            'description' => $this->faker->sentence,
            'article_id' => $this->faker->uuid,
            'slug' => $this->faker->slug,
            'image' => $this->faker->imageUrl,
            'author_name' => $this->faker->name,
            'author_image' => $this->faker->imageUrl,
            'author_description' => $this->faker->sentence,
            'author_id' => $this->faker->uuid,
            'category' => $this->faker->word,
            'tags' => $this->faker->words(3, true),
            'status' => $this->faker->randomElement(['draft', 'published']),
            'visibility' => $this->faker->randomElement(['public', 'private']),
            'content' => $this->faker->paragraphs(19, true),
            'created_at' => $this->faker->dateTime,
            'updated_at' => $this->faker->dateTime,
        ];
    }
}
