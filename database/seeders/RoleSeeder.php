<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $baseRoles = ['admin', 'moderator', 'user'];
        foreach ($baseRoles as $baseRole) {
            Role::query()->updateOrCreate([
                'name' => $baseRole,
            ]);
        }
    }
}
