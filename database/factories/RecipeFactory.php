<?php

namespace Database\Factories;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Recipe>
 */
class RecipeFactory extends Factory
{
    public function definition(): array
    {
        if (User::query()->count() === 0) {
            UserFactory::new()->create();
        }
        return [
            'title' => $this->faker->text(),
            'content' => $this->faker->text(1200),
            'user_id' => User::query()->inRandomOrder()->first(),
        ];
    }
}
