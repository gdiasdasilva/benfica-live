<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'address',
        'email',
        'phone_number',
        'tripadvisor_url',
        'city',
        'country_id',
        'image'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function path()
    {
        return '/spots/' . $this->slug;
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
