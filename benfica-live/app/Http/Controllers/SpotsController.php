<?php

namespace App\Http\Controllers;

use App\Spot;
use DB;
use Illuminate\Http\Request;
use Image;
use Storage;

class SpotsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spots = Spot::all();
        $spotsByCountry = [];

        foreach ($spots as $spot) {
            $spotsByCountry[$spot->country->name_pt][] = $spot;
        }

        ksort($spotsByCountry);

        return view('spots.index')->with(compact('spotsByCountry'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries_list = DB::table('countries')
            ->select('id', 'name_pt')
            ->where('continent_id', 2)
            ->orWhere('continent_id', 6)
            ->orWhere('continent_id', 7)
            ->orderBy('name_pt', 'asc')
            ->get();

        return view('spots.create')->with(compact('countries_list'));
    }

    /**
     * Store a newly created resource in storage.
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
            // 'tripadvisor_url' => 'url|nullable',
            'country_id' => 'required|exists:countries,id',
            'spot_image' => 'image|nullable'
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

        $request = $request->only([
            'name',
            'address',
            'email',
            'phone_number',
            // 'tripadvisor_url',
            'city',
            'country_id',
        ]);

        $name = $request['name'];

        Spot::create([
            'name' => $request['name'],
            'slug' => str_slug($request['name']),
            'address' => $request['address'],
            'email' => $request['email'],
            'phone_number' => $request['phone_number'],
            // 'tripadvisor_url' => $request['tripadvisor_url'],
            'city' => $request['city'],
            'country_id' => $request['country_id'],
            'image' => $imagePath,
            'thumbnail_image' => $thumbnailPath
        ]);

         return redirect('/')->with('success', "Spot $name submetido com sucesso. Será publicado após ser revisto e aprovado. Obrigado!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Spot  $spot
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $spot = Spot::where('slug', $slug)->first();
        return view('spots.show')->with(compact('spot'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Spot  $spot
     * @return \Illuminate\Http\Response
     */
    public function edit(Spot $spot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Spot  $spot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spot $spot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Spot  $spot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spot $spot)
    {
        //
    }
}
