<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'email',
        'age',
        'roll_no',
        'address',
        'created_at',
        'updated_at',
    ];
}
