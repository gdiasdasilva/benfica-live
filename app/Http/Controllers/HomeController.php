<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spot;
use App\Country;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recentSpots = Spot::with('country')
            ->where('is_approved', true)
            ->where('image', '!=', null)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get([
                'name',
                'slug',
                'city',
                'thumbnail_image',
                'country_id'
            ]);

        $spotsCount = Spot::count();

        $countriesCount = Country::whereHas('spots', function ($spot) {
            $spot->where('is_approved', true);
        })->count();

        return view('welcome', compact('recentSpots', 'spotsCount', 'countriesCount'));
    }

    public function about()
    {
        $countriesWithSpots = Country::whereHas('spots', function($spot) {
            $spot->where('is_approved', true);
        })
        ->withCount(['spots' => function ($spots) {
            $spots->where('is_approved', true);
        }])
        ->orderBy('name_pt', 'ASC')->get();

        return view('about', compact('countriesWithSpots'));
    }
}
