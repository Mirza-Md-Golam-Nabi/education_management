<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentBasicInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id', 'contact_id', 'guardian_id',
    ];
}
