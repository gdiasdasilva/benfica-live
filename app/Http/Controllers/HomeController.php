<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spot;
use App\Country;

class HomeController extends Controller
{
    /**
     * Show the application homepage
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $featuredSpots = Spot::featured()->get();

        $spotsCount = Spot::count();

        $countriesCount = Country::whereHas('spots', function ($spot) {
            $spot->where('is_approved', true);
        })->count();

        return view('welcome', compact('featuredSpots', 'spotsCount', 'countriesCount'));
    }

    /**
     * Show the about us page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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
