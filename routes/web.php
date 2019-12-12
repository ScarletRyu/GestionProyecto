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
    return view('home');
})->name('inicio');
//rutas empleados
Route::get('/empleados', 'empleadosController@index')->name('empleados');
Route::get('/empleado/{id}', 'empleadosController@show')->name('empleado');
//rutas proyectos
Route::get('/proyectos', 'proyectosController@index')->name('proyectos');
Route::get('/proyectos/create', 'proyectosController@create')->name('proyectos.create');
Route::post('proyectos', 'proyectosController@store')->name('proyectos.store');
Route::get('/proyectos/{id}', 'proyectosController@show')->name('proyectos.show');
Route::get('/proyectos/{id}/edit', 'proyectosController@edit')->name('proyectos.edit');
Route::put('/proyectos/{id}', 'proyectosController@update')->name('proyectos.update');
Route::get('/proyectos/{id}', 'proyectosController@destroy')->name('proyectos.destroy');
//rutas departamentos
Route::get('/departamentos', 'departamentosController@index')->name('departamentos');
Route::get('/departamento/{id}', 'departamentosController@show')->name('departamento');
//rutas resources
Route::resource('proyecto', 'proyectosController');
Route::resource('empleado', 'empleadosController');