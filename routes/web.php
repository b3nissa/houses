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

Route::group([''], function () {
    Route::group(['prefix' => '', 'as' => 'index.'], function () {
        Route::get('/', ['uses' => 'IndexController@index', 'as' => 'index']);
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
