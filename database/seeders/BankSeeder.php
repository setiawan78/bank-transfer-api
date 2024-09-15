<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bank;

class BankSeeder extends Seeder
{
    public function run()
    {
        Bank::create(['name' => 'Bank Central Asia', 'code' => 'BCA']);
        Bank::create(['name' => 'Bank Negara Indonesia', 'code' => 'BNI']);
        Bank::create(['name' => 'Bank Mandiri', 'code' => 'MANDIRI']);
        Bank::create(['name' => 'Bank Rakyat Indonesia', 'code' => 'BRI']);
    }
}
