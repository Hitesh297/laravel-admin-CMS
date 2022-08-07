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
            'logo' => $this->faker->randomElement(['<i class="fa-solid fa-beer-mug-empty"></i>',
            '<i class="fa-solid fa-bomb"></i>',
            '<i class="fa-solid fa-broom-ball"></i>',
            '<i class="fa-solid fa-dragon"></i>',
            '<i class="fa-solid fa-floppy-disk"></i>',
            '<i class="fa-solid fa-motorcycle"></i>',
            '<i class="fa-solid fa-keyboard"></i>',
            '<i class="fa-solid fa-network-wired"></i>',
            '<i class="fa-solid fa-share-nodes"></i>',
            '<i class="fa-solid fa-camera-retro"></i>']),
            'url' => $this->faker->unique()->url(),
            'sequence' => $this->faker->randomDigit(),
        ];
    }
}
