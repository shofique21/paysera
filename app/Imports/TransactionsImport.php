<?php

namespace App\Imports;

use App\Models\Transaction;
use App\Models\AccountUser;
use App\Models\AdminAccount;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class TransactionsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $lastBalance = AccountUser::where('identity_number',$row['identity_number'])->first()->balance;
        
        if($row['operation_type'] == 'deposit'){
            //calculations for commission
            
            $commission = $row['operation_amount'] * (3/1000);
            $currentBalance = $lastBalance + $row['operation_amount'] - $commission;

        } elseif($row['operation_type'] == 'withdraw' && $row['account_type'] == 'private' && $lastBalance > $row['operation_amount']){
             //calculations for commission

            $commission = $row['operation_amount'] * (3/1000);
            $currentBalance = $lastBalance - $row['operation_amount'] - $commission;

        }elseif($row['operation_type'] == 'withdraw' && $row['account_type'] == 'business' && $lastBalance > $row['operation_amount']){
             //calculations for commission

            $commission = $row['operation_amount'] * (5/1000);
            $currentBalance = $lastBalance - $row['operation_amount'] - $commission;
        }

         AccountUser::where('identity_number',$row['identity_number'])->update(['balance'=> $currentBalance]);
       
         return new Transaction([
            'identity_number'     => $row['identity_number'],
            'operations_date'    => $row['operations_date'], 
            'account_type'    => $row['account_type'], 
            'operation_type'    => $row['operation_type'], 
            'operation_amount'    => $row['operation_amount'], 
            'commission_amount'    => $commission, 
            'currency'    => $row['currency'], 
            'amount_balance' => $currentBalance,
        ]);
    }
}
