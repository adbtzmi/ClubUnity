<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'usertype' => 'admin',
                'password' => Hash::make('password'), // Change this to a secure password
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Regular User',
                'email' => 'user@example.com',
                'usertype' => 'user',
                'password' => Hash::make('password'), // Change this to a secure password
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
