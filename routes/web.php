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
	return redirect ('beranda');
});

Route::group(['middleware'=>'auth'],function(){

	Route::get('beranda','Beranda_Controller@index');

	//manage OB
	Route::get('office-boy','OfficeBoy_Controller@index');
	Route::get('office-boy/add','OfficeBoy_Controller@add');
	Route::post('office-boy/add','OfficeBoy_Controller@store');
	Route::get('office-boy/{id}','OfficeBoy_Controller@edit');
	Route::put('office-boy/{id}','OfficeBoy_Controller@update');
	Route::delete('office-boy/{id}','OfficeBoy_Controller@delete');

	//manage data tugas
	Route::get('tugas','Tugas_Controller@index')->name('tugas.index');
	Route::get('tugas/add','Tugas_Controller@add');
	Route::post('tugas/add','Tugas_Controller@store');
	Route::get('tugas/{id}','Tugas_Controller@edit');
	Route::put('tugas/{id}','Tugas_Controller@update');
	Route::delete('tugas/{id}','Tugas_Controller@delete');
	Route::get('admin','Tugas_Controller@index');
	Route::post('tugas/selesai', 'Tugas_Controller@selesai')->name('tugas.selesai');

	//manage data verifikasi
	Route::get('verifikasi','Verifikasi_Controller@index');
	Route::get('verifikasi/pdf/{id}','Verifikasi_Controller@pdf');

	//manage menu pesan
	Route::get('pesan','Pesan_Controller@index');
	Route::post('pesan','Pesan_Controller@update');

	//manage menu jadwal
});

Auth::routes();

Route::get('/home', function(){
	return redirect('beranda');
});

Route::get('keluar',function(){
	\Auth::logout();
	return redirect('login');
});
