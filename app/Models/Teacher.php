<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_id', 'photo', 'department', 'qualification', 'certification', 'status', 'language_spoken',
    ];
}
