<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@paysera.com',
            'password' => bcrypt('Admin123'),
        ]);
        User::create(
            [
                'name' => 'Shofique',
                'email' => 'shofique@paysera.com',
                'password' => bcrypt('Shofique123'),
            ]
        );
    }
}
