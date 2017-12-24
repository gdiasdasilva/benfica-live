<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    protected $fillable = [
        'name',
        'address',
        'email',
        'phone_number',
        'tripadvisor_url',
        'city',
        'country_id'
    ];

    public function path()
    {
        return '/spots/' . $this->id;
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
