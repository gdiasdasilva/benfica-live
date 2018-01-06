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
        $recent_spots = Spot::orderBy('created_at', 'desc')->where('is_approved', true)->get()->random(3);

        $spotsCount = Spot::all()->count();
        $countriesCount = Country::whereHas('spots', function($spot) {
            $spot->where('is_approved', true);
        })->count();

        return view('welcome', compact('recent_spots', 'spotsCount', 'countriesCount'));
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
