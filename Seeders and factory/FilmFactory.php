<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->text(),
            'release_date' => $this->faker->date(),
            'rating' => $this->faker->randomFloat(1, 1, 5),
            'duration' => $this->faker->numberBetween(60, 180),
            'poster_url' => $this->faker->imageUrl(),
            'trailer_url' => $this->faker->url(),

        ];
    }
}
