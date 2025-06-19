<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Admin user create/update karne ke liye
        User::updateOrCreate(
            ['email' => 'admin@foodzone.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('admin123'),  // Password hashed hoga
                'role' => 'admin',                      // Role admin set karein
            ]
        );

        // Aap yahan baki seeders ya factories bhi chala sakte hain, agar chahein
        // User::factory(10)->create();
    }
}
