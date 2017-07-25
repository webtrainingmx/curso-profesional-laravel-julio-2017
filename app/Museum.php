<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Museum extends Model
{
    public function reviews() {
        return $this->hasMany('App\Review');
    }
}
