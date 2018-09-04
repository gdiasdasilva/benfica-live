<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CountriesWithPTTableSeeder::class,
            CountriesSlugTableSeeder::class
        ]);

        if (app()->environment() == 'local') {
            $this->call(SpotsTableSeeder::class);
        }
    }
}
