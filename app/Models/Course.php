<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'code', 'title', 'description', 'credits', 'duration', 'max_enroll', 'course_fee', 'start_date', 'end_date', 'status',
    ];
}
