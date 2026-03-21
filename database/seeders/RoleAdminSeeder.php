<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RoleAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create([
            'name' => 'admin'
        ]);

        $customerRole = Role::create([
            'name' => 'customer'
        ]);

        $user = User::create([
            'name' => 'Rommy',
            'email' => 'rommyardiansyah@gmail.com',
            'phone' => '082132877781',
            'photo' => 'rommy.png',
            'password' => Hash::make('rommyhouse2026'),
        ]);

        $user->assignRole($adminRole);
    }
}
