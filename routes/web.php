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
    return redirect()->route('dashboard');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'p'], function () {
    
    Route::get('/dashboard', function () {
         return view('dashboard');
    })->name('dashboard');

    Route::get('/master', function () {
        return view('menu.master');  
    })->name('menu.master');

    Route::get('/pendaftaran', function () {
        return view('menu.pendaftaran');  
    })->name('menu.pendaftaran');


    Route::group(['prefix' => 'master', 'namespace' => 'Master'], function () { 
        Route::get('/subunit', SubUnit::class)->name('subunit');
        Route::get('/kelasrawat', 'KelasrawatController@index')->name('kelasrawat');
        Route::get('/poliklinik', 'PoliklinikController@index')->name('poliklinik');
        Route::get('/ruangan', 'RuanganController@index')->name('ruangan');
        Route::get('/kamar', 'KamarController@index')->name('kamar');
        Route::get('/pegawai', 'PegawaiController@index')->name('pegawai');
    });
});

require __DIR__.'/auth.php';
