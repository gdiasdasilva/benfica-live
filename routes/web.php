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

Route::get('/admin/login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('/admin/login', ['as' => 'login', 'uses' => 'Auth\LoginController@login']);
Route::get('/admin/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function()
{
    Route::get('/', 'Admin\DashboardController@dashboard');
    Route::get('/spots', 'Admin\SpotsController@index');
    Route::get('/spots/submissions', 'Admin\SpotsController@getSubmissions');
    Route::get('/spots/submissions/{spotId}', 'Admin\SpotsController@show');
    Route::post('/spots/submissions/{spotId}', 'Admin\SpotsController@update');
});

// Route::get('/admin/submissions', 'DashboardController@dashboard');

Route::get('/', 'HomeController@index');

/* Spots */

Route::post('/spots', 'SpotsController@store');
Route::get('/spots/new', 'SpotsController@create')->name('spots.create');
Route::get('/spots/{slug}', 'SpotsController@show');

/* Countries */

Route::get('/paises', 'CountriesController@index')->name('countries.index');
Route::get('/paises/{countrySlug}/spots/{spotSlug}', 'SpotsController@show')->name('spots.show');
Route::get('/paises/{countrySlug}', 'CountriesController@show')->name('countries.show');

/* Contacts */

Route::get('/contactos', 'ContactController@show')->name('contacts.show');
Route::post('/contactos', 'ContactController@store');

/* About */

Route::get('/sobre-nos', 'HomeController@about')->name('page.about');

/* Emails test */

// Route::get('/mailable', function () {
//     $contactMessage = App\Spot::find(1);
//     return new App\Mail\SpotSubmitted($contactMessage);
// });
