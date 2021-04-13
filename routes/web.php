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

/*
Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
*/

Auth::routes();
Route::get('/', 'UserController@index');
Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {


    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/admin', 'AdminController@index');
    Route::get('/car', 'CarController@index');
    Route::get('/about', 'PagesController@about');

    //car
    Route::get('/car/create', 'CarController@create');
    Route::post('/car', 'CarController@store');
    Route::get('/car/{id}/destroy', 'CarController@destroy');
    Route::get('/car/{mobil}/edit', 'CarController@edit');
    Route::patch('/car/{mobil}/update', 'CarController@update')->name('car.update');
    Route::get('/car/cari', 'CarController@cari');
    //tipe
    Route::get('/tipe', 'TipeController@index');
    Route::get('/tipe/{id_tipe}/destroy', 'TipeController@destroy');
    Route::get('/tipe/create', 'TipeController@create');
    Route::post('/tipe', 'TipeController@store');
    Route::get('/tipe/{tipe}/edit', 'TipeController@edit');
    Route::patch('/tipe/{tipe}/update', 'TipeController@update')->name('tipe.update');
    //pelanggan
    Route::get('/pelanggan', 'PelangganController@index');
    Route::get('/pelanggan/create', 'PelangganController@create');
    Route::post('/pelanggan', 'PelangganController@store');
    Route::get('/pelanggan/{id}/destroy', 'PelangganController@destroy');
    Route::get('/pelanggan/{pelanggan}/edit', 'PelangganController@edit');
    Route::patch('/pelanggan/{id}/update', 'PelangganController@update')->name('pelanggan.update');
    Route::get('/pelanggan/{id}/foto', 'PelangganController@foto')->name('pelanggan.foto');
    Route::get('/pelanggan/cari', 'PelangganController@cari');
    //transaksi
    Route::get('/transaksi', 'TransaksiController@index');
    Route::get('/transaksi/create', 'TransaksiController@create');
    Route::post('/transaksi', 'TransaksiController@store');
    Route::get('/transaksi/{id}/destroy', 'TransaksiController@destroy');
    Route::get('/transaksi/{transaksi}/edit', 'TransaksiController@edit');
    Route::patch('/transaksi/{transaksi}/update', 'TransaksiController@update')->name('transaksi.update');
    Route::get('/transaksi/export_excel', 'TransaksiController@export_excel');
    Route::get('/transaksi/print', 'TransaksiController@print')->name('transaksi.print');
    Route::get('/transaksi/cari', 'TransaksiController@cari');
    //laporan
    Route::get('/laporan', 'LaporanController@index');
    Route::get('/laporan/periode', 'Laporancontroller@periode');
    Route::get('/laporan/print', 'LaporanController@print')->name('laporan.print');
});
// Route::get('/daftar/create', 'DaftarController@create');
// Route::post('/', 'DaftarController@store');

Route::group(['middleware' => ['auth', 'checkRole:pelanggan']], function () {
    Route::get('/user/profile', 'UserController@profile')->name('user.profile');
    Route::get('/user/{mobil:id}/show', 'UserController@show');
    Route::get('/user/{mobil:id}/create', 'UserController@create');
    // Route::post('/user/{mobil:id}/store', 'UserController@store')->name('mobil.store');
    Route::post('/user/{id}/store', 'UserController@store')->name('mobil.store');
    Route::get('/user/{id}/print', 'UserController@print')->name('user.print');
    Route::get('/user/{id}/destroy', 'UserController@destroy');
    Route::get('/user/{pelanggan}/edit', 'UserController@edit');
    Route::patch('/user/{pelanggan}/update', 'UserController@update')->name('user.update');
    // Route::resource('user', 'UserController');
});

// Auth::routes();
