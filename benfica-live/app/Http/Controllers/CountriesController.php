<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountriesController extends Controller
{
    public function index()
    {
        $countries = Country::whereHas('spots', function($spot){
            $spot->where('is_approved', true);
        })->orderBy('name_pt', 'ASC')->get();

        return view('countries.index', compact('countries'));
    }

    public function show($countrySlug)
    {
        $country = Country::where('slug_pt', $countrySlug)->first();
        return view('countries.show', compact('country'));
    }
}
