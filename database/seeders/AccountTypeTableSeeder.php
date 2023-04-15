<?php

namespace Database\Seeders;

use App\Models\AccountType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AccountType::create([
            'name' => 'private',
            'description' => 'Personal private account',
        ]);
        AccountType::create(
            [
                'name' => 'business',
                'description' => 'Business account for trademarks',
            ]
        );
    }
}
