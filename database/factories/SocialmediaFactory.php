<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Socialmedia>
 */
class SocialmediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'logo' => $this->faker->word(),
            'url' => $this->faker->unique()->url(),
            'sequence' => $this->faker->randomDigit(),
        ];
    }
}
