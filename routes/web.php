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

Route::get('/','PendaftaranUserController@index')->name('home');
Route::get('/noPasien-PDF/{id}','PrintToPDFController@noDaftarPDF')->name('noPasien-PDF');
        
Route::group(['middleware' => ['auth']], function () {
    Route::prefix('/admin')->group(function(){
        Route::resource('/pendaftaran','PendaftaranController');
        Route::resource('/pasien','PasienController');
        Route::resource('/dokter','DokterController');
        Route::resource('/poli','PoliController');
        
        // PDF daftar Pasien
        Route::get('/pasien-PDF','PrintToPDFController@PasienToPDF')->name('pasien-PDF');
    });    
});

Auth::routes();
