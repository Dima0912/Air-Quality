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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::name('home')->group(function () {
    Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
});


Route::name('users.')->group(function() {
    Route::post('users/registration', 'UserController@registration')->name('registration');
    Route::post('users/authorization', 'UserController@authorization')->name('authorization');
    Route::get('users/show', 'UserController@show')->name('show');
    Route::delete('users/delete', 'UserController@delete')->name('delete');
});

Route::name('cities')->group(function() {
    Route::get('cities', 'App\Http\Controllers\CityController@index');
    Route::get('cities/new', 'App\Http\Controllers\CityController@create')->name('.create');
    Route::post('cities/store', 'App\Http\Controllers\CityController@store')->name('.store');
    Route::get('cities/show', 'App\Http\Controllers\CityController@show')->name('.show');
    Route::get('cities/{city}/edit', 'App\Http\Controllers\CityController@edit')->name('.edit');
    Route::put('cities/{city}/update', 'App\Http\Controllers\CityController@update')->name('.update');
    Route::delete('cities/{city}', 'App\Http\Controllers\CityController@destroy')->name('.delete');
});

Route::name('airs')->group(function() {
    Route::get('airs', 'App\Http\Controllers\AirQualityController@index');
    Route::get('airs/new', 'App\Http\Controllers\AirQualityController@create')->name('.create');
    Route::post('airs/store', 'App\Http\Controllers\AirQualityController@store')->name('.store');
    Route::get('airs/show', 'App\Http\Controllers\AirQualityController@show')->name('.show');
    Route::get('airs/{air}/edit', 'App\Http\Controllers\AirQualityController@edit')->name('.edit');
    Route::put('airs/{air}/update', 'App\Http\Controllers\AirQualityController@update')->name('.update');
    Route::delete('airs/{air}', 'App\Http\Controllers\AirQualityController@destroy')->name('.delete');
});
