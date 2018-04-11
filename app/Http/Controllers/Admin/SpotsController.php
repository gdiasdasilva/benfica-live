<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use App\Spot;
use App\Country;

class SpotsController extends Controller
{
    /**
     * List of all Spots ordered by updated_at date
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $spots = Spot::with('country')
                    ->orderBy('updated_at', 'DESC')
                    ->paginate(10);

        return view('admin.spots.index', compact('spots'));
    }

    public function getSubmissions()
    {
        $notApprovedSpots = Spot::where('is_approved', false)->get();
        $approvedSpots = Spot::where('is_approved', true)->orderBy('updated_at')->get();
        return view('admin.spots.submissions', compact('notApprovedSpots', 'approvedSpots'));
    }

    public function show($spotId)
    {
        $spot = Spot::findOrFail($spotId);
        $countries_list = DB::table('countries')
            ->select('id', 'name_pt')
            ->where('continent_id', 2)
            ->orWhere('continent_id', 6)
            ->orWhere('continent_id', 7)
            ->orderBy('name_pt', 'asc')
            ->get();

        return view('admin.spots.show', compact('spot', 'countries_list'));
    }

    public function update(Request $request, $spotId)
    {
        $request->validate([
            'name' => 'required|max:60',
            'city' => 'required|max:35',
            'email' => 'email|nullable',
            'country_id' => 'required|exists:countries,id',
            'website' => 'url|nullable'
        ]);

        $latitude = null;
        $longitude = null;

        if ($request->has('latitudeLongitude')) {
            $latitudeLongitude = explode(",", $request->input('latitudeLongitude'));
            $latitude = $latitudeLongitude[0];
            $longitude = $latitudeLongitude[1];
        }

        $spot = Spot::findOrFail($spotId);

        $spot->update([
            'name' => $request->has('name') ? $request->input('name') : null,
            'address' => $request->has('address') ? $request->input('address') : null,
            'email' => $request->has('email') ? $request->input('email') : null,
            'phone_number' => $request->has('phone_number') ? $request->input('phone_number') : null,
            'city' => $request->has('city') ? $request->input('city') : null,
            'country_id' => $request->has('country_id') ? $request->input('country_id') : null,
            'website' => $request->has('website') ? $request->input('website') : null,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'is_approved' => true,
        ]);

        $spot->save();

        return redirect('/admin/spots/submissions')->with('success', "Spot $spot->name editado e aprovado com sucesso.");
    }
}
