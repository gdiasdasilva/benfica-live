<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Spot;
use App\Country;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalCountries = Country::whereHas('spots')->count();
        $totalSpots = Spot::all()->count();
        $totalSpotsPendingApproval = Spot::where('is_approved', false)->count();
        return view('admin.dashboard', compact('totalSpots', 'totalCountries', 'totalSpotsPendingApproval'));
    }
}
