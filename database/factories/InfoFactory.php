<?php

namespace Database\Factories;

use App\Models\Info;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Info>
 */
class InfoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'complete_duration' => $this->faker->numberBetween(5, 45),
            'level' => $this->faker->numberBetween(1, 5),
        ];
    }
}
