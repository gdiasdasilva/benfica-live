<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spot;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recent_spots = Spot::orderBy('created_at', 'desc')->take(3)->get();
        return view('welcome')->with(compact('recent_spots'));
    }
}
