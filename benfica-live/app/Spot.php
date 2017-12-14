<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    public function path()
    {
        return '/spots/' . $this->id;
    }

    public function country()
    {
        return $this->belongsTo('App\Country');
    }
}
