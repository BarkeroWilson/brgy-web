<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@barangay.gov',
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'), // Change this to a secure password
            'remember_token' => Str::random(10),
            'role' => User::ROLE_ADMIN,
        ]);

        $this->command->info('Admin user created successfully!');
        $this->command->info('Email: admin@barangay.gov');
        $this->command->info('Password: admin123');
    }
}
