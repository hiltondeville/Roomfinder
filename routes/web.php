<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

Route::middleware('auth')->group( function () {
  Route::resource('/canaryrooms', 'CanaryRoomsController');
  Route::resource('rooms', 'RoomsController');
  Route::resource('/pioneerrooms', 'PioneerRoomsController');
  Route::resource('/prestonrooms', 'PrestonRoomsController');


  Route::post('/rooms/search', 'RoomsController@searchrooms');
  Route::post('/rooms/searchsid', 'RoomsController@searchsid');
  Route::post('/canaryrooms/search', 'CanaryRoomsController@searchrooms');
  Route::post('/canaryrooms/searchsid', 'CanaryRoomsController@searchsid');
  Route::post('/pioneerrooms/search', 'PioneerRoomsController@searchrooms');
  Route::post('/pioneerrooms/searchsid', 'PioneerRoomsController@searchsid');
  Route::post('/prestonrooms/search', 'PrestonRoomsController@searchrooms');
  Route::post('/prestonrooms/searchsid', 'PrestonRoomsController@searchsid');


  Route::get('exists/error', 'RoomsController@error');

});
