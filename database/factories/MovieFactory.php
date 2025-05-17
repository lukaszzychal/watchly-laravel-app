<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title = $this->faker->sentence();
        return [
            'title' => $title,
            'description' => $this->faker->sentence(),
            'poster' => 'https://img.freepik.com/premium-vector/default-image-icon-vector-missing-picture-page-website-design-mobile-app-no-photo-available_87543-11093.jpg',
            'video' => 'https://img.freepik.com/premium-vector/default-image-icon-vector-missing-picture-page-website-design-mobile-app-no-photo-available_87543-11093.jpg',
            'year' => $this->faker->year(),
            'country' => $this->faker->country(),
            'duration' => $this->faker->randomNumber(2).' min',
            'genre' =>  json_encode([$this->faker->word(), $this->faker->word(), $this->faker->word()]),
            'rating' => $this->faker->randomFloat(1, 0, 10),
            'release_date' => $this->faker->date(),
            'actors' => json_encode([$this->faker->name(), $this->faker->name(), $this->faker->name()]), // $this->faker->name(),
            'director' => $this->faker->name(),
            'writer' => $this->faker->name(),
        ];
    }
}
