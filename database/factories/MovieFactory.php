<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->sentence(),
            'image' => $this->faker->imageUrl(),
            'video' => $this->faker->imageUrl(),
            'year' => $this->faker->year(),
            'country' => $this->faker->country(),
            'duration' => $this->faker->randomNumber(2),
            'genre' => $this->faker->word(),
            'rating' => $this->faker->randomFloat(1, 0, 10),
            'slug' => $this->faker->slug(),
        ];
    }
}
