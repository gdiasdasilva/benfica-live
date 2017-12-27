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

Route::get('/spots', 'SpotsController@index');
Route::post('/spots', 'SpotsController@store');
Route::get('/spots/new', 'SpotsController@create');
Route::get('/spots/{slug}', 'SpotsController@show');

/* Countries */

Route::get('/countries', 'CountriesController@index');
Route::get('/countries/{countrySlug}', 'CountriesController@show');

/* Contacts */

Route::get('/contacts', 'ContactController@show');
Route::post('/contacts', 'ContactController@store');
