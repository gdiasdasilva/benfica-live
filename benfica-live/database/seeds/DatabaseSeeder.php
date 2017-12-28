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
        $this->call(CountriesWithPTTableSeeder::class);
        $this->call(CountriesSlugTableSeeder::class);
        $this->call(SpotsTableSeeder::class);
    }
}
