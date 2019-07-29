<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'class_id', 'section_id', 'name', 'email', 'password', 'photo', 'gender', 'address'
    ];
}
