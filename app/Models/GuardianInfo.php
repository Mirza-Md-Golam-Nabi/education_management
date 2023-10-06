<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuardianInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'father_name', 'mother_name', 'father_phone', 'mother_phone',
    ];
}
