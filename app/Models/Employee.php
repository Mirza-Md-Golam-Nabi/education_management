<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'designation', 'contact_id', 'employee_type_id', 'employment_history', 'bank_account_id', 'status',
    ];
}
