<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\Recipe;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Item>
 */
class ItemFactory extends Factory
{
    public function definition(): array
    {
        if (Recipe::query()->count() === 0)
        {
            RecipeFactory::new()->create();
        }

        if (Unit::query()->count() === 0)
        {
            UnitFactory::new()->create();
        }

        return [
            'recipe_id' => Recipe::query()->inRandomOrder()->first(),
            'name' => $this->faker->text(100),
            'unit_id' => Unit::query()->inRandomOrder()->first(),
        ];
    }
}
