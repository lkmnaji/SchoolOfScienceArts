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

Auth::routes();
Route::get('/', 'SOSA\Admin\WelcomeController@index')->name('welcome.sosa');

Route::group(['middleware' => 'auth'], function(){
    Route::prefix('admin')->group(function(){
        Route::get('/dashboard','SOSA\Admin\DashboardAdminController@index')->name('admin.index');
        Route::resource('/tingkatpendidikan','SOSA\Admin\TingkatPendidikanController');
        Route::resource('/namasekolah','SOSA\Admin\NamaSekolahController');
        Route::resource('/posisi','SOSA\Admin\PosisiController');
        Route::resource('/sumberinformasi','SOSA\Admin\SumberInformasiController');
        Route::resource('/tahunajaran','SOSA\Admin\TahunAjaranController');
        Route::resource('/jeniskelamin','SOSA\Admin\JenisKelaminController');
        Route::resource('/footer', 'SOSA\Admin\FooterController');
        Route::resource('/carousel', 'SOSA\Admin\CarouselController');
        Route::resource('/profilesekolah', 'SOSA\Admin\ProfileSekolahController');
        Route::get('/formsiswa','SOSA\Admin\FormSiswaController@index')->name('index.formsiswa');
        Route::get('/formpegawai','SOSA\Admin\FormPegawaiController@index')->name('index.formpegawai');
    });
});

Route::prefix('user')->group(function(){
    Route::get('/homepage','SOSA\User\HomePageController@indexhomeuser')->name('home.user');
    Route::get('/tentangsekolah', 'SOSA\User\TentangSekolahController@indextentangsekolah')->name('tentang.sekolah');
    Route::get('/visimisisekolah', 'SOSA\User\TentangSekolahController@indexvisimisisekolah')->name('visimisi.sekolah');
    Route::get('/pendaftaransiswa', 'SOSA\User\FormPendaftaranSiswaController@index')->name('index.pendaftaransiswa');
    Route::get('/formpendaftaransiswa', 'SOSA\User\FormPendaftaranSiswaController@create')->name('form.pendaftaransiswa');
    Route::post('/formpendaftaransiswa', 'SOSA\User\FormPendaftaranSiswaController@store')->name('formsiswa.store');
    Route::get('/pendaftaranpegawai', 'SOSA\User\FormPendaftaranPegawaiController@index')->name('index.pendaftaranpegawai');
    Route::get('/formpendaftaranpegawai', 'SOSA\User\FormPendaftaranPegawaiController@create')->name('form.pendaftaranpegawai');
    Route::post('/formpendaftaranpegawai', 'SOSA\User\FormPendaftaranPegawaiController@store')->name('formpegawai.store');
    Route::get('/smpart','SOSA\User\SMPArtController@index')->name('index.smpart');
    Route::get('/smaart','SOSA\User\SMAArtController@index')->name('index.smaart');
    Route::get('/smpscience','SOSA\User\SMPScienceController@index')->name('index.smpscience');
    Route::get('/smascience','SOSA\User\SMAScienceController@index')->name('index.smascience');
});
    


