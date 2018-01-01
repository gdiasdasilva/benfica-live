<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/', 'HomeController@index');

/* Spots */

// Route::get('/spots', 'SpotsController@index');
Route::post('/spots', 'SpotsController@store');
Route::get('/spots/new', 'SpotsController@create');
Route::get('/spots/{slug}', 'SpotsController@show');

/* Countries */

Route::get('/paises', 'CountriesController@index');
Route::get('/paises/{countrySlug}/spots/{spotSlug}', 'SpotsController@show');
Route::get('/paises/{countrySlug}', 'CountriesController@show');

/* Contacts */

Route::get('/contactos', 'ContactController@show');
Route::post('/contactos', 'ContactController@store');

/* Emails test */

// Route::get('/mailable', function () {
//     $contactMessage = App\Spot::find(1);
//     return new App\Mail\SpotSubmitted($contactMessage);
// });
