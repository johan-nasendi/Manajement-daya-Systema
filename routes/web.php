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

// Route::get('/', function () {
//     return view('welcome');
// });

// Crud
Route::get('/list','prosescontrolle@index');
Route::get('/create','prosescontrolle@create');
Route::post('/proses','prosescontrolle@store');
route::get('/proses/{proses}/edit','prosescontrolle@edit');
Route::patch('/proses/{proses}','prosescontrolle@update');
Route::get('/proses/{proses}','prosescontrolle@show');
Route::get('/showprofile','prosescontrolle@show');
Route::delete('/proses/{proses}','prosescontrolle@destroy');



// defaulf layout
Route::get('/','Pagecontroller@home');
Route::get('/dataemail', 'Pagecontroller@setting');
Route::get('/struktur', 'Pagecontroller@struktur');
Route::get('/keluahan', 'Pagecontroller@keluahan');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/photosuser', 'Pagecontroller@gallery'); 



// login
Auth::routes();

// Datafile

Route::get('/listfile','prosescontrolle@listfile');
Route::get('/createfile','prosescontrolle@createfile');
Route::post('/datafile','prosescontrolle@tambah');

Route::get('/datafile/{datafile}/editfile','prosescontrolle@tampil');
Route::get('/datafile/{datafile}','prosescontrolle@display');
Route::get('/showfile','prosescontrolle@display');

Route::patch('/datafile/{datafile}','prosescontrolle@ganti');
Route::delete('/datafile/{datafile}','prosescontrolle@hapus');


// Post Complaint

Route::get('/listcomplaint', 'StatusController@index');
Route::get('/keluahan', 'StatusController@create');
Route::post('/status','StatusController@store');
Route::get('/status/{status}','StatusController@show');
Route::post('/showcom','StatusController@show');
Route::delete('/status/{status}','StatusController@destroy');

