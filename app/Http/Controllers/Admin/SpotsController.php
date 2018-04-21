<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use App\Spot;

class SpotsController extends Controller
{
    /**
     * List of all Spots ordered by updated_at date
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $spots = Spot::with('country')
                    ->orderBy('is_approved', 'ASC')
                    ->orderBy('updated_at', 'DESC')
                    ->paginate(10);

        return view('admin.spots.index', compact('spots'));
    }

    /**
     * Show form to complete a Spot submission data
     * @param $spotId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($spotId)
    {
        $spot = Spot::findOrFail($spotId);

        $countries_list = DB::table('countries')
            ->select('id', 'name_pt')
            ->where('continent_id', 2)
            ->orWhere('continent_id', 3)
            ->orWhere('continent_id', 6)
            ->orWhere('continent_id', 7)
            ->orderBy('name_pt', 'asc')
            ->get();

        return view('admin.spots.edit', compact('spot', 'countries_list'));
    }

    /**
     * Submit a new form to update a Spot
     * @param Request $request
     * @param $spotId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $spotId)
    {
        $request->validate([
            'name' => 'required|max:60',
            'city' => 'required|max:35',
            'email' => 'email|nullable',
            'country_id' => 'required|exists:countries,id',
            'website' => 'url|nullable',
            'image' => 'image',
        ]);

        $latitude = null;
        $longitude = null;

        if ($request->has('latitudeLongitude') && $request->get('latitudeLongitude')) {
            $latitudeLongitude = explode(",", $request->get('latitudeLongitude'));

            if (count($latitudeLongitude) == 2) {
                $latitude = $latitudeLongitude[0];
                $longitude = $latitudeLongitude[1];
            }
        }

        if (!($latitude && $longitude)) {
            $latitude = null;
            $longitude = null;
        }

        $spot = Spot::findOrFail($spotId);

        $spot->update([
            'name' => $request->get('name'),
            'address' => $request->get('address'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone_number'),
            'city' => $request->get('city'),
            'country_id' => $request->get('country_id'),
            'website' => $request->get('website'),
            'latitude' => $latitude,
            'longitude' => $longitude,
            'is_approved' => $request->has('approved') ? true : false,
        ]);

        $spot->save();

        return redirect(route('admin.spots.index'))->with('success', "Spot $spot->name gravado com sucesso.");
    }
}
