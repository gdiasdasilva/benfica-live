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
        'city',
        'country_id',
        'image',
        'thumbnail_image',
        'website',
        'latitude',
        'longitude',
        'is_approved',
        'is_featured',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function getImageAttribute($imagePath)
    {
        return ($imagePath ? asset("storage/$imagePath") : null);
    }

    public function getThumbnailImageAttribute($thumbnailImagePath)
    {
        return ($thumbnailImagePath ? asset("storage/$thumbnailImagePath") : null);
    }

    /**
     * Returns the 3 most recent Spots that have an image
     * and are approved
     *
     * @param $query
     * @param int $take
     */
    public function scopeMostRecent($query, $take = 3) {
        $query->with('country')
            ->where('is_approved', true)
            ->where('image', '!=', null)
            ->orderBy('created_at', 'desc')
            ->take($take);
    }
}
