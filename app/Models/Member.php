<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'first_name', 
        'middle_name',
        'last_name',
        'gender',
        'user_type'
    ];
}
