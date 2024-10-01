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
    return redirect('/login');
});
route::middleware('auth')->group(function () {
    Route::get('/barcode', 'BarcodegeneratorController@barcode')->name('barcode');
    Route::post('import', 'BarcodegeneratorController@import')->name('import');
    Route::get('importExportView', 'BarcodegeneratorController@importExportView')->name('importExportView');
    Route::get('export', 'BarcodegeneratorController@export')->name('export');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('inventaris', 'BarcodegeneratorController@inventaris_all')->name('inventaris');
    Route::resource('barcode-data', 'BarcodegeneratorController');
    Route::resource('profile', 'ProfileController');
});
Route::get('/detail/{id}', 'BarcodegeneratorController@detail')->name('detail');
Auth::routes();
