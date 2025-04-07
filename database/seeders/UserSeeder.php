<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'name' => 'Admin',
            'is_admin' => true,
            'password' => 'password'
        ]);

        User::create([
            'username' => 'syahrul',
            'name' => 'Syahrul',
            'is_admin' => false,
            'password' => 'password'
        ]);
    }
}
