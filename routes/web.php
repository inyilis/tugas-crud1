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

Route::get('/pertanyaan', 'pertanyaanController@index');
Route::get('/pertanyaan/create', 'pertanyaanController@create');
Route::post('/pertanyaan', 'pertanyaanController@store');
Route::get('/pertanyaan/{pertanyaan_id}', 'pertanyaanController@show');
Route::get('/pertanyaan/{pertanyaan_id}/edit', 'pertanyaanController@edit');
Route::put('/pertanyaan/{pertanyaan_id}', 'pertanyaanController@update');
Route::delete('/pertanyaan/{pertanyaan_id}', 'pertanyaanController@destroy');

Route::get('/jawaban/{pertanyaan_id}', 'jawabanController@index');
Route::post('/jawaban/{pertanyaan_id}', 'jawabanController@store');