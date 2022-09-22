<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    public function run(): void
    {
        $baseUnits = ['kg', 'g', 'L', 'ml', 'EL', 'TL', 'MS', 'Stk', 'Priese'];
        foreach ($baseUnits as $baseUnit) {
            Unit::query()->updateOrCreate([
                'name' => $baseUnit,
            ]);
        }
    }
}
