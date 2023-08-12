<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonTeachingPersonnel extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'employees_id',
        'access_level_id',
        'log'
    ];
}
