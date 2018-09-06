<?php

namespace App\Http\Controllers\Admin;

use App\Spot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

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
            ->orderBy('latitude', 'ASC')
            ->orderBy('updated_at', 'DESC')
            ->paginate(10);

        return view('admin.spots.index', compact('spots'));
    }

    /**
     * Show form to complete a Spot submission data
     * @param $spotId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(String $spotId)
    {
        $spot = Spot::findOrFail($spotId);

        $countriesList = DB::table('countries')
            ->select('id', 'name_pt')
            ->where('continent_id', 2)
            ->orWhere('continent_id', 3)
            ->orWhere('continent_id', 6)
            ->orWhere('continent_id', 7)
            ->orderBy('name_pt', 'asc')
            ->get();

        return view('admin.spots.edit', compact('spot', 'countriesList'));
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
            'name' => 'required|string|max:60',
            'city' => 'required|string|max:35',
            'country' => 'required|exists:countries,id',
            'address' => 'required|string|nullable|max:255',
            'phone-number' => 'string|nullable|max:20',
            'email' => 'email|nullable',
            'website' => 'url|nullable',
            'latitude-longitude' => 'string|nullable',
            'image' => 'image|nullable|max:2000',
        ]);

        $latitude = null;
        $longitude = null;

        // If latitude/longitude were submitted, separate the values
        if ($request->has('latitude-longitude') && $request->get('latitude-longitude')) {
            $latitudeLongitude = explode(',', $request->get('latitude-longitude'));

            if (isset($latitudeLongitude[0], $latitudeLongitude[1])) {
                $latitude = $latitudeLongitude[0];
                $longitude = $latitudeLongitude[1];
            }
        }

        $spot = Spot::findOrFail($spotId);

        $dataToUpdate = [
            'name' => $request->get('name'),
            'address' => $request->get('address'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone-number'),
            'city' => $request->get('city'),
            'country_id' => $request->get('country'),
            'website' => $request->get('website'),
            'latitude' => $latitude,
            'longitude' => $longitude,
            'is_approved' => $request->has('approved') ? true : false,
            'is_featured' => $request->has('featured') ? true : false,
        ];

        $image = $request->file('image');

        if ($image) {
            $imagePath = $image->hashName('spots');

            $thumbnailPath = $image->hashName('spots');
            $thumbnailPathExploded = explode('.',$thumbnailPath);
            $thumbnailPath = $thumbnailPathExploded[0] . '-thumbnail.' . $thumbnailPathExploded[1];

            $img = Image::make($image);
            $img->fit(500, 450);

            $imgThumbnail = Image::make($image);
            $imgThumbnail->fit(350, 240);

            Storage::put($imagePath, (string) $img->encode());
            Storage::put($thumbnailPath, (string) $imgThumbnail->encode());

            $dataToUpdate['image'] = $imagePath;
            $dataToUpdate['thumbnail_image'] = $thumbnailPath;
        }

        $spot->update($dataToUpdate);

        return redirect()->route('admin.spots.edit', $spot->id)->with('success', "Spot $spot->name gravado com sucesso.");
    }

    /**
     * Delete an existing spot
     * @param $spotId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($spotId)
    {
        $spot = Spot::findOrFail($spotId);
        $spotName = $spot->name;

        $spot->delete();

        return redirect()->route('admin.spots.index')->with('success', "Spot $spotName apagado com sucesso.");
    }
}
