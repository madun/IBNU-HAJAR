<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('getDetailBarang', 'Admin\transaksi_penjualan\PenjualanController@show')->name('getDetailBarang');
Route::post('getDetailSaham', 'Admin\member_saham\sahamController@getDetailSaham')->name('getDetailSaham');
Route::post('getPropinsi', 'Admin\wilayah\wilayahController@getPropinsi')->name('getPropinsi');
Route::post('getKabupaten', 'Admin\wilayah\wilayahController@getKabupaten')->name('getKabupaten');
Route::post('getKecamatan', 'Admin\wilayah\wilayahController@getKecamatan')->name('getKecamatan');
Route::post('getKelurahan', 'Admin\wilayah\wilayahController@getKelurahan')->name('getKelurahan');
Route::post('getQRCODE', 'qrcode\qrcodeController@getQRCODE')->name('getQRCODE');
