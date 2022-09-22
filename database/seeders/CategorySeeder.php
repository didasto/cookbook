<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $baseCategories = ['Kuchen', 'Torten', 'Gebäck', 'Herzhaftes', 'Dessert', 'Cocktails', 'Schnelles', 'Low Carb'];
        foreach ($baseCategories as $baseCategory) {
            Category::query()->updateOrCreate([
                'name' => $baseCategory,
            ]);
        }
    }
}
