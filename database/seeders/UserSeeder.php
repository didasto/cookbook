<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::query()->updateOrCreate([
            'id' => 1,
        ], [
            'name' => 'Florian Klöpfer',
            'email' => 'kontakt@naggle.de',
            'password' => '$2y$10$lK7A4uXfD.uQDRbcBWfEoeNXGk3V5uRhPMNJAs8NsS.GOySoEUG1.', // Hash::make('AD87a%%(klj45_-asdD21ÖO&/%f8ztv76R8zf876RF(/Sdf&aD%('),
            'role_id' => 1, // admin role
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
