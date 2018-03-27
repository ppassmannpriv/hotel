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

Route::get('/', function () {
    return view('base.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Hotel routes
 */

Route::get('/hotels', 'Hotels@index')->name('hotels');
Route::get('/hotels/view/{id}', 'Hotels@view')->name('hotels_detail_view');
Route::get('/hotels/create', 'Hotels@create')->name('hotels_create_form');
Route::post('/hotels', 'Hotels@store')->name('hotels_store_new');