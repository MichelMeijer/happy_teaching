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

Route::post('/beoordeling_form', 'FormController@store');

Route::get('/toevoegen', function() {
    return view('toevoegen');
});

Route::get('/exporteren', function() {
    return view('export');
});

Route::get('/overzicht', 'BeoordelingenController@show');
Route::post('/export', 'BeoordelingenController@export');



