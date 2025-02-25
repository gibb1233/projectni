<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    //add new user
    protected $table = 'students';
    protected $fillable = ['name', 'age', 'gender'];
}