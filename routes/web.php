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

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function ()
{
    Route::get('/dashboard', 'DashboardController@dashboard')->name('admin.dashboard');
    Route::get('/spots', 'SpotsController@index')->name('admin.spots.index');

    Route::get('/spots/{spotId}/edit', 'SpotsController@edit')->name('admin.spots.edit');
    Route::post('/spots/{spotId}', 'SpotsController@update')->name('admin.spots.update');

    Route::delete('/spots/{spotId}', 'SpotsController@destroy')->name('admin.spots.destroy');
});

Route::get('/admin/logout', 'Auth\LoginController@logout')->middleware('auth');

/* Homepage */

Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index',
]);

/* Spots */

Route::get('/spots/submeter', [
    'as' => 'spots.create',
    'uses' => 'SpotsController@create',
]);

Route::post('/spots', [
    'as' => 'spots.store',
    'uses' => 'SpotsController@store',
]);

/* Countries */

Route::get('/paises', [
    'as' => 'countries.index',
    'uses' => 'CountriesController@index'
]);

Route::get('/paises/{countrySlug}/spots/{spotSlug}', [
    'as' => 'spots.show',
    'uses' => 'SpotsController@show'
]);

Route::get('/paises/{countrySlug}', [
    'as' => 'countries.show',
    'uses' => 'CountriesController@show'
]);

/* Contacts */

Route::get('/contactos', [
    'as' => 'contacts.show',
    'uses' => 'ContactController@show'
]);

Route::post('/contactos', [
    'as' => 'contacts.store',
    'uses' => 'ContactController@store'
]);

/* About */

Route::get('/sobre-nos', [
    'as' => 'page.about',
    'uses' => 'HomeController@about'
]);

if (app()->environment() === 'local') {
    Route::get('/mailables/spots/{id}', function ($spotId) {
        $spot = App\Spot::findOrFail($spotId);
        return new App\Mail\SpotSubmitted($spot);
    });

    Route::get('/mailables/contacts/{id}', function ($contactId) {
        $contactMessage= App\ContactMessage::findOrFail($contactId);
        return new App\Mail\ContactSubmitted($contactMessage);
    });
}