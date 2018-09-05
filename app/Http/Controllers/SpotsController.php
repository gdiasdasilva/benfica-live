<?php

namespace App\Http\Controllers;

use App\Spot;
use App\Mail\SpotSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class SpotsController extends Controller
{
    /**
     * Show the form for creating a new Spot.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $countries = DB::table('countries')
            ->select('id', 'name_pt')
            ->where('continent_id', 2)
            ->orWhere('continent_id', 3)
            ->orWhere('continent_id', 6)
            ->orWhere('continent_id', 7)
            ->orderBy('name_pt', 'asc')
            ->get();

        return view('spots.create', compact('countries'));
    }

    /**
     * Store a newly created Spot in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:60',
            'city' => 'required|string|max:35',
            'country' => 'required|exists:countries,id',
            'address' => 'required|string|nullable|max:255',
            'phone-number' => 'string|nullable|max:20',
            'email' => 'email|nullable',
            'website' => 'url|nullable',
            'image' => 'image|nullable|max:2000',
        ]);

        $image = $request->file('image');
        $imagePath = null;
        $thumbnailPath = null;

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
        }

        $name = $request->get('name');

        $slug = str_slug($name);
        $slugIndex = 0;

        // If slug already in use, add an index to the slug
        while (Spot::where('slug', $slug)->count()) {
            $slugIndex++;
            $slug = "$slug-$slugIndex";
        }

        $spot = Spot::create([
            'name' => $name,
            'slug' => $slug,
            'country_id' => $request->get('country'),
            'city' => $request->get('city'),
            'address' => $request->get('address'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone-number'),
            'website' => $request->get('website'),
            'image' => $imagePath,
            'thumbnail_image' => $thumbnailPath,
        ]);

        $recipientAddress = config('mail.to')['address'];

        if ($recipientAddress && (config('mail.status') || app()->environment(['production']))) {
            // Send e-mail to admin alerting about new spot submission
            Mail::to($recipientAddress)->send(new SpotSubmitted($spot));
        }

        return redirect()->route('home')->with('success',
            "<p>Spot <strong>$name</strong> submetido com sucesso!</p><p>Será publicado em breve, após revisão por
                parte da nossa equipa. Obrigado!</p>");
    }

    /**
     * Display the specified Spot.
     *
     * @param String $countrySlug
     * @param String $spotSlug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(String $countrySlug, String $spotSlug)
    {
        $spot = Spot::where('slug', $spotSlug)
            ->where('is_approved', true)
            ->firstOrFail();

        return view('spots.show', compact('spot'));
    }
}
