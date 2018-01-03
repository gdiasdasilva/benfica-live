<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Spot;
use App\Country;

class SpotsController extends Controller
{
    public function index()
    {
        $spots = Spot::all();
        return view('admin.spots.index', compact('spots'));
    }
}
