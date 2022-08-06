<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->text(),
            'technologies' => $this->faker->text(),
            'gitUrl' => $this->faker->url(),
            'liveUrl' => $this->faker->url(),
            // 'photo' => $this->faker->imageUrl($width = 640, $height = 480),
            'photo' => 'https://source.unsplash.com/random',
            'sequence' => $this->faker->randomDigit(),
        ];
    }
}
