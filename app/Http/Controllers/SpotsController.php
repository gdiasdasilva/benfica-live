<?php

namespace App\Http\Controllers;

use App\Spot;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Image;
use Storage;

use App\Mail\SpotSubmitted;

class SpotsController extends Controller
{
    /**
     * Show the form for creating a new Spot.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries_list = DB::table('countries')
            ->select('id', 'name_pt')
            ->where('continent_id', 2)
            ->orWhere('continent_id', 3)
            ->orWhere('continent_id', 6)
            ->orWhere('continent_id', 7)
            ->orderBy('name_pt', 'asc')
            ->get();

        return view('spots.create', compact('countries_list'));
    }

    /**
     * Store a newly created Spot in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:60',
            'city' => 'required|max:35',
            'email' => 'email|nullable',
            'country_id' => 'required|exists:countries,id',
            'spot_image' => 'image|nullable|max:2000',
            'website' => 'url|nullable'
        ]);

        $image = $request->file('spot_image');
        $imagePath = null;
        $thumbnailPath = null;

        if ($image) {
            $imagePath = $image->hashName('spots');
            $thumbnailPath = $image->hashName('spots');
            $thumbnailPathExploded = explode('.',$thumbnailPath);
            $thumbnailPath = $thumbnailPathExploded[0] . '-thumbnail.' . $thumbnailPathExploded[1];

            $img = Image::make($image);
            $img->fit(350, 240);

            $imgThumbnail = Image::make($image);
            $imgThumbnail->fit(500, 450);

            Storage::put($imagePath, (string) $img->encode());
            Storage::put($thumbnailPath, (string) $imgThumbnail->encode());
        }

        $name = $request['name'];

        $spot = Spot::create([
            'name' => $name,
            'slug' => str_slug($name),
            'address' => $request->has('address') ? $request->input('address') : null,
            'email' => $request->has('email') ? $request->input('email') : null,
            'phone_number' => $request->has('phone_number') ? $request->input('phone_number') : null,
            'city' => $request->has('city') ? $request->input('city') : null,
            'country_id' => $request->has('country_id') ? $request->input('country_id') : null,
            'image' => $imagePath,
            'thumbnail_image' => $thumbnailPath,
            'website' => $request->has('website') ? $request->input('website') : null,
        ]);

        if (config('mail.status') || app()->environment(['production'])) {
            Mail::to(config('mail.to')['address'])->send(new SpotSubmitted($spot));
        }

        return redirect()->route('home')->with('success', "Spot $name submetido com sucesso. Será publicado após ser revisto e aprovado. Obrigado!");
    }

    /**
     * Display the specified Spot.
     *
     * @param  \App\Spot  $spot
     * @return \Illuminate\Http\Response
     */
    public function show($countrySlug, $spotSlug)
    {
        $spot = Spot::where('slug', $spotSlug)->where('is_approved', true)->firstOrFail();
        return view('spots.show')->with(compact('spot'));
    }
}
