<?php

namespace App\Imports;

use App\Models\Transaction;
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
        return new Transaction([
            'identity_number'     => $row['identity_number'],
            'operations_date'    => $row['operations_date'], 
            'account_type'    => $row['account_type'], 
            'operation_type'    => $row['operation_type'], 
            'operation_amount'    => $row['operation_amount'], 
            'commission_amount'    => $row['commission_amount'], 
            'currency'    => $row['currency'], 
        ]);
    }
}
