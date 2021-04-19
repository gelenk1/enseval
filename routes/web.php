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

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/cabang', function () {
    return view('cabang');
})->name('cabang');


Route::get('/divisi', function () {
    return view('divisi.index');
})->name('divisi');


Route::get('/home', 'HomeController@index')->name('home');
#start of routes jabatan
Route::get('/jabatan', 'JabatanController@index')->name('jabatan');

Route::get('/jabatan/create', 'JabatanController@create')->name('jabatan.create');
Route::post('jabatan', 'JabatanController@store')->name('jabatan.store');

Route::get('/jabatan/{id}/edit', 'JabatanController@edit')->name('jabatan.edit');
Route::patch('jabatan/{id}', 'JabatanController@update')->name('jabatan.update');

Route::delete('jabatan/{id}', 'JabatanController@delete')->name('jabatan.delete');
#end of routes jabatan

Route::get('/cabang', 'CabangController@index')->name('cabang');
Route::get('/cabang/create', 'CabangController@create')->name('cabang.create');
Route::post('cabang', 'CabangController@store')->name('cabang.store');

Route::get('/cabang/{id}/edit', 'CabangController@edit')->name('cabang.edit');
Route::patch('cabang/{id}', 'CabangController@update')->name('cabang.update');

Route::delete('cabang/{id}', 'CabangController@delete')->name('cabang.delete');

#start of routes divisi
Route::get('/divisi', 'DivisiController@index')->name('divisi');
Route::get('/divisi/create', 'DivisiController@create')->name('divisi.create');
Route::post('divisi', 'DivisiController@store')->name('divisi.store');

Route::get('/divisi/{id}/edit', 'DivisiController@edit')->name('divisi.edit');
Route::patch('divisi/{id}', 'DivisiController@update')->name('divisi.update');

Route::delete('divisi/{id}', 'DivisiController@delete')->name('divisi.delete');
#end of routes jabatan

Route::get('/user', 'UserController@index')->name('user');
Route::get('/user/create', 'UserController@create')->name('user.create');
Route::post('user', 'UserController@store')->name('user.store');

Route::get('/user/{id}/edit', 'UserController@edit')->name('user.edit');
Route::patch('user/{id}', 'UserController@update')->name('user.update');

Route::delete('user/{id}', 'UserController@delete')->name('user.delete');



//Route::get('/user', 'UserController@index')->name('user');
