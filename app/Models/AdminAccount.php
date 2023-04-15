<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminAccount extends Model
{
    use HasFactory;
    protected $fillable = [
        'identity_number',
        'operations_date',
        'commission_amount',
        'current_balance',
        'currency',
        'created_by',
    ];
}
