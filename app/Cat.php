<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cat extends Model
{
    // cho phép trường nào được phép insert vào database
    use SoftDeletes; // use traint
    protected $fillable = [
        'name','age','breed_id'
    ];


    protected $dates = ['deleted_at'];

    public function breed()
    {
        return $this->belongsTo('App\Breed');
    }
}
