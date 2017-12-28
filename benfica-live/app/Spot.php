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
        'image',
        'thumbnail_image'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function path()
    {
        return '/paises/' . $this->country->slug_pt . '/' . $this->slug;
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
