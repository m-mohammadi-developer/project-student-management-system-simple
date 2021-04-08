<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'cne', 'firstName', 'secondName', 'age', 'speciality'
    ];

}
