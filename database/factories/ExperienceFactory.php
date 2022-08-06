<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'companyName' => $this->faker->name(),
            'position' => $this->faker->unique()->word(),
            'responsibilities' => $this->faker->text(),
            'startDate' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'endDate' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
