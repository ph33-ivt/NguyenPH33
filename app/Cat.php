<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    // cho phép trường nào được phép insert vào database
    protected $fillable = [
        'name','age','breed_id'
    ];
}
