<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['Framework','Tools','Database','Javascript','Testing','Devops']),
            'details' => $this->faker->randomElement(['C#, PHP, javascript, HTML, CSS','jenkins, jfrog, shellscript','SQL, DB2, MYSQL, Mongo','.NET, Laravel, React, Vue']),
            'sequence' => $this->faker->randomDigit(),
            'fontawesomeHTML' => $this->faker->word(),
        ];
    }
}
