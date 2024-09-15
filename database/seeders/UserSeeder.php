<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'John Doe', 'email' => 'john@example.com', 'password' => Hash::make('password123')],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'password' => Hash::make('password123')],
            ['name' => 'Michael Johnson', 'email' => 'michael@example.com', 'password' => Hash::make('password123')],
            ['name' => 'Emily Davis', 'email' => 'emily@example.com', 'password' => Hash::make('password123')],
            ['name' => 'Chris Brown', 'email' => 'chris@example.com', 'password' => Hash::make('password123')],
            ['name' => 'Sarah Wilson', 'email' => 'sarah@example.com', 'password' => Hash::make('password123')],
            ['name' => 'David Lee', 'email' => 'david@example.com', 'password' => Hash::make('password123')],
            ['name' => 'Laura Martin', 'email' => 'laura@example.com', 'password' => Hash::make('password123')],
            ['name' => 'James Clark', 'email' => 'james@example.com', 'password' => Hash::make('password123')],
            ['name' => 'Amanda Taylor', 'email' => 'amanda@example.com', 'password' => Hash::make('password123')],
            
            ['name' => 'Test User', 'email' => 'test@test.lv', 'password' => Hash::make('testtest')],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
