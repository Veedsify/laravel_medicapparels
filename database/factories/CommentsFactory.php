<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comments>
 */
class CommentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'comment' => $this->faker->text(),
            'email' => $this->faker->email(),
            'image' => $this->faker->imageUrl(),
            'comment_id' => $this->faker->randomElement(['asdasdsdfsdf', '232d2dewedwd']),
            'user_id' => $this->faker->randomElement(['acti23232ve', 'inactisdsdfsfve']),
            'article_id' => $this->faker->randomElement(['actsdfsfve', 'inacsfsdfs323tive']),
        ];
    }
}
