<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Spot;
use App\Country;

class DashboardController extends Controller
{
    /**
     * Returns stats for dashboard
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dashboard()
    {
        $spots = Spot::all();

        $totalCountries = Country::whereHas('spots')->count();
        $totalSpots = $spots->count();
        $totalSpotsPendingApproval = $spots->where('is_approved', false)->count();
        $featuredSpots = $spots->where('is_featured', true)->sortByDesc('created_at')->take(8);

        return view('admin.dashboard', compact('totalSpots', 'totalCountries', 'totalSpotsPendingApproval', 'featuredSpots'));
    }
}
