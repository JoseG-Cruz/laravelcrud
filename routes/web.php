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

use App\Http\Controllers\UserController;

//Listado de usuarios
Route::get('/','UserController@list');
//Formulario de usuarios
Route::get('/form','UserController@userform');
//Guardar usuarios
Route::post('/save','UserController@save')->name('save');
//Eliminar usuarios
Route::delete('/delete/{id}','UserController@delete')->name('delete');
//Formulario para editar usuarios
Route::get('/editform/{id}','UserController@editform')->name('editform');
//Edición de usuarios
Route::patch('/edit/{id}','UserController@edit')->name('edit');


