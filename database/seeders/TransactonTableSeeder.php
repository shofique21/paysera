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
                'account_type' => 'Private',
                'operation_type' => 'deposit',
                'operation_amount' => '20000',
                'commission_amount' => '20',
                'amount_balance' => '19980',
                'currency' => 'USD',
                'status' => 'success',
                'created_by' => 'Admin',
            ],
            [
                'identity_number' => '34202',
                'operations_date' => $date,
                'account_type' => 'Business',
                'operation_type' => 'deposit',
                'operation_amount' => '15000',
                'commission_amount' => '15',
                'amount_balance' => '15985',
                'currency' => 'USD',
                'status' => 'success',
                'created_by' => 'Admin',
            ],
            [
                'identity_number' => '34203',
                'operations_date' => $date,
                'account_type' => 'Business',
                'operation_type' => 'withdraw',
                'operation_amount' => '10000',
                'commission_amount' => '10',
                'amount_balance' => '30090',
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
