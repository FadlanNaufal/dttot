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

Route::resource('terorist','TeroristController');
Route::get('/terorist/{id}','TeroristController@show')->name('terorist.show');

Route::resource('datanik','DatanikController');
Route::get('/datanik/{id}','DatanikController@show')->name('datanik.show');

Route::resource('datapaspor','DatanonikController');
Route::get('/datapaspor/{id}','DatanonikController@show')->name('datapaspor.show');

Route::get('/nasabah','NasabahController@index')->name('nasabah.index');
Route::post('/nasabah','NasabahController@index')->name('nasabah.search');
Route::get('/nasabah/{id}','NasabahController@show')->name('nasabah.show');
Route::get('/cek-nasabah','NasabahController@check_index')->name('nasabah.check_nasabah');
Route::post('/cek-nasabah','NasabahController@check_mass')->name('nasabah.checkmass');

