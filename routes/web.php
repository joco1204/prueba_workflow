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
    return view('index');
});

Route::get('/trabajadores', 'EmployeeController@index')->name('trabajadores');
Route::get('/nuevo-trabajador', 'EmployeeController@create')->name('nuevo-trabajador');
Route::post('/nuevo-trabajador', 'EmployeeController@store')->name('nuevo-trabajador');
Route::get('/ver-trabajador/{id}', 'EmployeeController@show')->name('ver-trabajador');
Route::get('/editar-trabajador/{id}', 'EmployeeController@edit')->name('editar-trabajador');
Route::post('/editar-trabajador/{id}', 'EmployeeController@update')->name('editar-trabajador');

Route::get('/ordenes-de-trabajo', 'WorkOrderController@index')->name('ordenes-de-trabajo');
Route::get('/nueva-orden-de-trabajo', 'WorkOrderController@create')->name('nueva-orden-de-trabajo');
Route::post('/nueva-orden-de-trabajo', 'WorkOrderController@store')->name('nueva-orden-de-trabajo');
Route::get('/ver-orden-de-trabajo/{id}', 'WorkOrderController@show')->name('ver-orden-de-trabajo');
Route::get('/editar-orden-de-trabajo/{id}', 'WorkOrderController@edit')->name('editar-orden-de-trabajo');
Route::post('/editar-orden-de-trabajo/{id}', 'WorkOrderController@update')->name('editar-orden-de-trabajo');


