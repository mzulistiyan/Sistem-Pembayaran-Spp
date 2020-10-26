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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route Siswa

Route::resource('/dashboard/siswa', 'SiswaController');

//Route Kelas
Route::get('/dashboard/kelas','KelasController@index');
Route::get('/dashboard/kelas/tambah','KelasController@tambah');
Route::post('/dashboard/kelas/create','KelasController@create');
Route::get('/dashboard/kelas/{nisn}/edit','KelasController@edit');
Route::post('/dashboard/kelas/{nisn}/update','KelasController@update');
Route::get('/dashboard/kelas/{id_kelas}/delete','KelasController@delete');

//Route Spp
Route::get('/dashboard/spp','SppController@index');
Route::get('/dashboard/spp/tambah','SppController@tambah');
Route::post('/dashboard/spp/create','SppController@create');
Route::get('/dashboard/spp/{id_spp}/edit','SppController@edit');
Route::post('/dashboard/spp/{id_spp}/update','SppController@update');
Route::get('/dashboard/spp/{id_spp}/delete','SppController@delete');

//transaksi
Route::get('/dashboard/transaksi','TransaksiController@transaksi');
Route::get('/dashboard/transaksi/carinama','TransaksiController@carinama');
Route::get('/dashboard/transaksi/carinisn','TransaksiController@carinisn');
Route::get('/dashboard/transaksi/{nisn}/bayar','TransaksiController@bayar');
Route::post('/dashboard/transaksi/create','TransaksiController@create');

//Laporan
Route::get('/dashboard/laporan','LaporanController@index');
Route::get('/dashboard/cetak_pdf', 'LaporanController@cetak_pdf');

//History
Route::get('/dashboard/history','HistoryController@history');
Route::get('/dashboard/history/carinama','HistoryController@carinama');
Route::get('/dashboard/history/carinisn','HistoryController@carinisn');

//Petugas
Route::get('/dashboard/petugas','PetugasController@index');
Route::get('/dashboard/petugas/tambah','PetugasController@tambah');
Route::post('/dashboard/petugas/create','PetugasController@create');
Route::get('/dashboard/petugas/{id}/edit','PetugasController@edit');
Route::post('/dashboard/petugas/{id}/update','PetugasController@update');
Route::get('/dashboard/petugas/{id}/delete','PetugasController@delete');
Route::get('/dashboard/petugas/cari','PetugasController@cari');
