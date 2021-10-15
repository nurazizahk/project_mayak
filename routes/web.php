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

Route::get ('/', function () {
    return view('welcome');
    // return 'halo';
});

// Route::get('/perizinan', function () {
//     return view('perizinan');
//     // return 'izin dulu';
// });

Route::get('/perizinan','PerizinanController@index');
Route::get('/siswa','SiswaController@index');

// Route::resource('siswa','SiswaController');