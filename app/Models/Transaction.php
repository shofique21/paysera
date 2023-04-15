<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'identity_number',
        'operations_date',
        'account_type',
        'operation_type',
        'operation_amount',
        'commission_amount',
        'amount_balance',
        'currency',
        'status',
        'created_by',
    ];
}
