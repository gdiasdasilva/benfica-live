<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountriesController extends Controller
{
    public function index()
    {
        $countries = Country::has('spots')->orderBy('name_pt', 'ASC')->get();
        return view('countries.index', compact('countries'));
    }

    public function show($countryId)
    {
        $country = Country::findOrFail($countryId);
        return view('countries.show', compact('country'));
    }
}
