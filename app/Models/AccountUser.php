<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'identity_number',
        'name',
        'email',
        'phone',
        'street',
        'state',
        'postCode',
        'country',
        'profession',
        'date_of_birth',
        'account_type',
        'pinCode',
        'balance',
        'currency'
    ];
}
