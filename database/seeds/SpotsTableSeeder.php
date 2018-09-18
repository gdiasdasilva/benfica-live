<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class SpotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $spotsFolderPath = storage_path('app/public/spots');

        if (!File::exists($spotsFolderPath)) {
            File::makeDirectory($spotsFolderPath);
        }

        factory(App\Spot::class, 40)->create();
    }
}
