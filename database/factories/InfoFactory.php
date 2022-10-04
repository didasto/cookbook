<?php

namespace Database\Factories;

use App\Models\Info;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Info>
 */
class InfoFactory extends Factory
{
    public function definition(): array
    {
        if (Recipe::query()->count() === 0)
        {
           RecipeFactory::new()->create();
        }
        return [
            'recipe_id' => Recipe::query()->inRandomOrder()->first(),
            'complete_duration' => $this->faker->numberBetween(5, 45),
            'level' => $this->faker->numberBetween(1, 5),
        ];
    }
}
