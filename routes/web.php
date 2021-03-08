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
Route::get('/', 'CardController@index')->name('card.index');
Route::get('/show/{id}', 'CardController@show')->name('cards.show');
Route::prefix('cards')->name('cards.')->group(function () {
  Route::put('/{store}/like', 'CardController@like')->name('like')->middleware('auth');
  Route::delete('/{store}/like', 'CardController@unlike')->name('unlike')->middleware('auth');
});
Route::get('/map', 'CardController@map')->name('cards.map');