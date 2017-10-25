<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::group(['middleware'=>['web']], function ()
{
	
    route::resource('tratamientoriesgo','TratamientoRiesgo\TratamientoRiesgoController');
    route::resource('tipotratamiento','TratamientoRiesgo\TipoTratamientoRiesgoControlles');
     
    route::resource('/','HomeController');
    route::resource('vulnerabilidad','VulnerabilidadController');
    route::resource('empresa','EmpresaController');
    Route::resource('control','ControlRiesgoController');
    Route::resource('activo','ActivoController');
});

