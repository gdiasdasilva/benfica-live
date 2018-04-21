<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountriesSlugTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = Country::all();

        foreach ($countries as $country) {
            $country->slug_pt = str_slug($country->name_pt);
            $country->save();
        }
    }
}
