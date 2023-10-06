<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccountInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'bank_name', 'branch_name', 'account_name', 'account_number', 'routing_number', 'account_type',
    ];
}
