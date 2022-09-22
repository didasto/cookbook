<?php

namespace Database\Factories;

use App\Models\NutritiveValue;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<NutritiveValue>
 */
class NutritiveValueFactory extends Factory
{
    public function definition(): array
    {
        return [
            'portion_size' => $this->faker->numberBetween(50, 1000),
            'energy' => $this->faker->numberBetween(50, 1000),
            'fat' => $this->faker->numberBetween(50, 1000),
            'carbohydrates' => $this->faker->numberBetween(50, 1000),
            'protein' => $this->faker->numberBetween(50, 1000),
            'salt' => $this->faker->numberBetween(50, 1000),
        ];
    }
}
