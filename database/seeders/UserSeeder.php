<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run()
    {
        User::create([
            'name' => 'PT Bos COD Indonesia',
            'email' => 'user@boscod.com',
            'password' => Hash::make("rahasia"),
        ]);

        User::create([
            'name' => 'Indra Setiawan',
            'email' => 'stiwanindra536@gmail.com',
            'password' => Hash::make("12345678"),
        ]);
    }
}
