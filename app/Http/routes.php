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
    return view('welcome');
});

Route::group(['middleware'=>['web']], function ()
{
	route::get('Informacion', 'ImformacionE\InformacionController@informacion');
    route::resource('tratamiento_riesgos','TratamientoRiesgo\TratamientoRiesgoController');
    route::resource('tipo_tratamientos','TratamientoRiesgo\TipoTratamientoRiesgoController');
   // route::get('dashboard','Desktop\DashboardController@index');

});

