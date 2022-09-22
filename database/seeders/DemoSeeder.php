<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Recipe;
use Database\Factories\InfoFactory;
use Database\Factories\ItemFactory;
use Database\Factories\NutritiveValueFactory;
use Database\Factories\RecipeFactory;
use Database\Factories\RoleFactory;
use Database\Factories\UserFactory;
use Exception;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Throwable;

class DemoSeeder extends Seeder
{
    /**
     * For Demo and UI checking
     * Create 50 user with admin, moderator or user role.
     * Each user become between 3 and 50 recipes (min 150, max 2.500 recipes over all)
     * Each recipe become one Info and one NutritiveValue (min 150, max 2.500 values and infos over all)
     * Each recipe become between 3 and 20 Items (min 450, max 50.000 items over all)
     * Each Item become 1 of 5 units
     *
     * @throws Exception
     * @throws Throwable
     */
    public function run(): void
    {
        $this->call(
            DatabaseSeeder::class
        );
        UserFactory::new()
            ->count(50)
            ->state(new Sequence(['role_id' => 1], ['role_id' => 2], ['role_id' => 3]))
            ->has(RecipeFactory::new()
                ->count(random_int(3, 50))
                ->has(InfoFactory::new()
                    ->count(1))
                ->has(NutritiveValueFactory::new())
                ->has(ItemFactory::new()
                    ->count(random_int(3, 20))
                    ->state(new Sequence(['unit_id' => 1], ['unit_id' => 2], ['unit_id' => 3], ['unit_id' => 4], ['unit_id' => 5]))))
            ->create();

        Recipe::query()->chunk(50, function($recipes) {
            /** @var Recipe $recipe */
            foreach ($recipes as $recipe) {
                $recipe->categories()->sync(Category::all()->random(random_int(1,4)));
                $recipe->saveOrFail();
            }
        });
    }
}
