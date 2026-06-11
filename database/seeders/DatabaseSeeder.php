<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $role = \Spatie\Permission\Models\Role::firstOrCreate(['name' => 'super_admin', 'guard_name' => 'web']);
        
        $user = \App\Models\User::firstOrCreate(
            ['email' => 'admin@bankjatim.co.id'],
            [
                'name' => 'Super Admin',
                'password' => bcrypt('password'),
            ]
        );

        $user->assignRole($role);
    }
}
