<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'SuperAdmin',
            'email' => 'superadmin@email.com',
            'role' => 0,
        ]);
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'role' => 1,
        ]);
        User::factory()->create([
            'name' => 'Nabila',
            'email' => 'nabila@email.com',
            'role' => 1,
        ]);
    }
}
