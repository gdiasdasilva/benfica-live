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
});

Route::get('/admin/logout', 'Auth\LoginController@logout')->middleware('auth');

/* Homepage */

Route::get('/', 'HomeController@index')->name('page.home');

/* Spots */

Route::get('/spots/submeter', 'SpotsController@create')->name('spots.create');
Route::post('/spots', 'SpotsController@store')->name('spots.store');

/* Countries */

Route::get('/paises', 'CountriesController@index')->name('countries.index');
Route::get('/paises/{countrySlug}/spots/{spotSlug}', 'SpotsController@show')->name('spots.show');
Route::get('/paises/{countrySlug}', 'CountriesController@show')->name('countries.show');

/* Contacts */

Route::get('/contactos', 'ContactController@show')->name('contacts.show');
Route::post('/contactos', 'ContactController@store')->name('contacts.store');

/* About */

Route::get('/sobre-nos', 'HomeController@about')->name('page.about');
