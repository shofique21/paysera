<?php

namespace Database\Seeders;

use App\Models\AdminAccount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminAccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdminAccount::truncate();
        $date = date('Y-m-d H:i:s');
        $transactions = [
            [
                'identity_number' => '34201',
                'operations_date' => $date,
                'commission_amount' => '9',
                'current_balance' => '9',
                'currency' => 'USD',
                'created_by' => 'Admin',
            ],
            [
                'identity_number' => '34202',
                'operations_date' => $date,
                'commission_amount' => '45',
                'current_balance' => '54',
                'currency' => 'USD',
                'created_by' => 'Admin',
            ],
            [
                'identity_number' => '34203',
                'operations_date' => $date,
                'commission_amount' => '75',
                'current_balance' => '129',
                'currency' => 'USD',
                'created_by' => 'Admin',
            ],
        ];
        
        foreach ($transactions as $key => $value) {
            AdminAccount::create($value);
        }
    }
}
