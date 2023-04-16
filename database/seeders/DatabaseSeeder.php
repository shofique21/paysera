<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserTableSeeder::class);
        $this->call(AccountHolderTableSeeder::class);
        $this->call(TransactonTableSeeder::class);
        $this->call(AdminAccountTableSeeder::class);
        $this->call(CurrencyTableSeeder::class);
        $this->call(AccountTypeTableSeeder::class);
        $this->call(OperationTypeTableSeeder::class);
    }
}
