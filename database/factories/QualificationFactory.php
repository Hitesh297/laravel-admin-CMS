<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Qualification>
 */
class QualificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'credential' => $this->faker->text($maxNbChars = 20),
            'details' => $this->faker->text(),
            'yearCompleted' => $this->faker->numberBetween($min = 2015, $max = 2022),
        ];
    }
}
