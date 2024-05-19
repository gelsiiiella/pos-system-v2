<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $admin = Role::create(['name' => 'admin']);
        $employee = Role::create(['name' => 'employee']);

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
        ])->assignRole($admin);
        User::factory()->create([
            'name' => 'Employee User',
            'email' => 'employee@example.com',
        ])->assignRole($employee);
        // User::factory(10)->create();
    }
}
