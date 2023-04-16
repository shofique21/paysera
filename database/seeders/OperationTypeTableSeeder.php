<?php

namespace Database\Seeders;

use App\Models\OperationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OperationTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OperationType::create([
            'name' => 'deposit',
            'description' => 'Transaction Deposit Account',
        ]);
        OperationType::create(
            [
                'name' => 'withdraw',
                'description' => 'Transaction withdraw Account',
            ]
        );
    }
}
