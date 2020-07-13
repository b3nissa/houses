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

Route::group(['prefix' => '', 'as' => 'index.'], function () {
    Route::get('/', ['uses' => 'IndexController@index', 'as' => 'index']);
    Route::get('/{house}/toon', ['uses' => 'IndexController@show', 'as' => 'show'] );
});


Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
        Route::get('/', ['uses' => 'DashboardController@index', 'as' => 'index']);
        Route::get('/toevoegen', ['uses' => 'HouseController@create', 'as' => 'create']);
        Route::post('/opslaan', ['uses' => 'HouseController@store', 'as' => 'store']);
        Route::get('/{house}/wijzigen', ['uses' => 'HouseController@edit', 'as' => 'edit']);
        Route::post('/{house}/updaten', ['uses' => 'HouseController@update', 'as' => 'update']);
        Route::delete('{house}/verwijder', ['uses' => 'HouseController@delete', 'as' => 'delete']);
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
