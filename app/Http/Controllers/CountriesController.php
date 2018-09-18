<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountriesController extends Controller
{
    /**
     * Lists all countries with the total of spots available for each one
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $countries = Country::whereHas('spots', function ($query) {
            $query->where('is_approved', true);
        })
        ->withCount(['spots' => function ($query) {
            $query->where('is_approved', true);
        }])
        ->orderBy('name_pt', 'ASC')
        ->get();

        return view('countries.index', compact('countries'));
    }

    /**
     * Show a list of all the spots for a specific country
     *
     * @param $countrySlug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(String $countrySlug)
    {
        $country = Country::where('slug_pt', $countrySlug)
            ->with(['spots' => function ($query) {
                $query->orderBy('city', 'ASC');
            }])
            ->whereHas('spots', function ($query) {
                $query->where('is_approved', true);
            })
            ->firstOrFail();

        return view('countries.show', compact('country'));
    }
}
