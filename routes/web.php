<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes([
'register' => false, // Registration Routes...
'reset' => false, // Password Reset Routes...
'verify' => false, // Email Verification Routes...
]);

Auth::routes();

// Authentication Route
Route::post('/login-custom','Auth\LoginCustomController@loginCustom')->name('login.custom');

// Home Dashboard Route
Route::get('/home', 'HomeController@index')->name('home');

// Data Master Route
Route::resource('terorist','TeroristController');
Route::get('/terorist/{id}','TeroristController@show')->name('terorist.show');

// Data NIK Route
Route::resource('datanik','DatanikController');
Route::get('/datanik/{id}','DatanikController@show')->name('datanik.show');

// Data Paspor Route
Route::resource('datapaspor','DatanonikController');
Route::get('/datapaspor/{id}','DatanonikController@show')->name('datapaspor.show');


// Nasabah Route
Route::resource('nasabah','NasabahController');
Route::get('/cek_one_nasabah','NasabahController@check_one')->name('nasabah.check_one');
Route::post('/cek_one_nasabah','NasabahController@check_one')->name('nasabah.search');
Route::get('/nasabah/{id}','NasabahController@show')->name('nasabah.show');
Route::get('/cek-nasabah','NasabahController@check_index')->name('nasabah.check_nasabah');
Route::post('/cek-nasabah','NasabahController@check_mass')->name('nasabah.checkmass');

// User Route
Route::resource('user','UserController');

// Import Data Route
Route::get('/import-nasabah','ImportController@index_nasabah')->name('import.nasabah');
Route::post('/import-nasabah','ImportController@import_nasabah')->name('post.nasabah');

Route::get('/import-datanik','ImportController@index_datanik')->name('import.datanik');
Route::post('/import-datanik','ImportController@import_datanik')->name('post.datanik');

Route::get('/import-datapaspor','ImportController@index_datapaspor')->name('import.datapaspor');
Route::post('/import-datapaspor','ImportController@import_datapaspor')->name('post.datapaspor');
