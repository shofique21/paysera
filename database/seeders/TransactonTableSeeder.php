<?php

namespace Database\Seeders;
use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction::truncate();
        $date = date('Y-m-d H:i:s');
        $transactions = [
            [
                'identity_number' => '34201',
                'operations_date' => $date,
                'account_type' => 'private',
                'operation_type' => 'withdraw',
                'operation_amount' => '3000',
                'commission_amount' => '9',
                'amount_balance' => '446991',
                'currency' => 'USD',
                'status' => 'success',
                'created_by' => 'Admin',
            ],
            [
                'identity_number' => '34202',
                'operations_date' => $date,
                'account_type' => 'private',
                'operation_type' => 'withdraw',
                'operation_amount' => '15000',
                'commission_amount' => '45',
                'amount_balance' => '484955',
                'currency' => 'USD',
                'status' => 'success',
                'created_by' => 'Admin',
            ],
            [
                'identity_number' => '34203',
                'operations_date' => $date,
                'account_type' => 'private',
                'operation_type' => 'withdraw',
                'operation_amount' => '25000',
                'commission_amount' => '75',
                'amount_balance' => '624925',
                'currency' => 'USD',
                'status' => 'success',
                'created_by' => 'Admin',
            ],
        ];
        
        foreach ($transactions as $key => $value) {
            Transaction::create($value);
        }
    }
}
