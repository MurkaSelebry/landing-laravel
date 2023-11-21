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
  Route::get('/apply', 'App\Http\Controllers\ApplicationController@create');
  Route::post('/apply', 'App\Http\Controllers\ApplicationController@store');
  Route::get('/applications', 'App\Http\Controllers\ApplicationListController@index');
  Route::post('/applications','App\Http\Controllers\AnketController@store');
  Route::get('/api/applications', 'App\Http\Controllers\ApplicationListController@api');
Route::get('/create', 'App\Http\Controllers\AnketController@create');
Route::post('/create', 'App\Http\Controllers\AnketController@store');
