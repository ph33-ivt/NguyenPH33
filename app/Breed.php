<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Breed extends Model
{
    protected $fillable = [
        'name'
    ];

    public function cats()
    {
        return $this->hasMany('App\Cat');
    }
}
