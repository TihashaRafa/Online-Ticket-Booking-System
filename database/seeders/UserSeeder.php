<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Rafa',
            'email' => 'rafa@gmail.com',
            'phone_number' => '123456789',
            'user_type' => 'admin',
            'password' => Hash::make('12345678'),
        ]);

        // User::create(
        // [
        //     'name' => 'customer',
        //     'email' => 'customer@gmail.com',
        //     'phone_number' => '123456789',
        //     'user_type' => 'customer',
        //     'password' => Hash::make('12345678'),
        // ]);
    }
}
