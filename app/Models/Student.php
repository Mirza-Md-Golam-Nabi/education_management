<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'roll_number', 'registration_number', 'class', 'status', 'admission_date', 'graduation_date',
    ];
}
