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

Route::any('/home', 'HomeController@index')->name('home');

Route::post('/carga', array('as' => 'cargar', 'uses' => 'ResultadosController@store'));

Route::get('/more/{id}', 'ResultadosController@busqueda_id');

Route::get('descargar', 'crear_pdf@ResultadosController')->name('pdf');
