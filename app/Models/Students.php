<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_prefix',
        'users_id',
        'name',
        'birthdate',
        'address',
        'contacts',
        'access_level_id',
        'log'
    ];

}
