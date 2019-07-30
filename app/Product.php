<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    protected $fillable = [
        'name','quantity'
    ];

    public function category()
    {
            return $this->belongsTo('Category');
    }
}
