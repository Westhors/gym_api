<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
                DB::table('users')->insert(
            [
                [
                    'name' => 'zaid alshaahir',
                    'phone' => '123456789',
                    'email' => 'gym@admin.com',
                    'role' => 'admin',
                    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                    'created_at' => now(),
                    'email_verified_at' => now(),
                    'updated_at' => now(),
                ]
            ]
        );
    }
}

