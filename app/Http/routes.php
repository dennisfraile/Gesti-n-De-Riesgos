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
    return view('auth/login');
});

Route::group(['middleware'=>['web']], function ()
{
	Route::get('/Bienvenido', 'HomeController@index');
    route::resource('vulnerabilidad','VulnerabilidadController');
    route::resource('empresa','EmpresaController');
    Route::resource('control','ControlRiesgoController');
    Route::resource('activo','ActivoController');
    Route::resource('empleado','EmpleadoController');
    Route::resource('users','UsuarioController');

    Route::auth();
    Route::get('/{slug?}', 'HomeController@index');

});

/*
Route::group(['middleware' =>  ['auth','adminsistema']], function () {

    Route::get('/Bienvenido', 'HomeController@index');
    route::resource('vulnerabilidad','VulnerabilidadController');
    route::resource('empresa','EmpresaController');
    Route::resource('control','ControlRiesgoController');
    Route::resource('activo','ActivoController');
    Route::resource('empleado','EmpleadoController');
    Route::resource('users','UsuarioController');

    Route::auth();

});

Route::group(['middleware' =>  ['auth','adminempresa']], function () {

    Route::get('/Bienvenido', 'HomeController@index');
    Route::get('/Bienvenido', 'HomeController@index');
    route::resource('vulnerabilidad','VulnerabilidadController');
    Route::resource('control','ControlRiesgoController');
    Route::resource('activo','ActivoController');
    Route::resource('empleado','EmpleadoController');
    Route::resource('users','UsuarioController');

    Route::auth();

});

Route::group(['middleware' =>  ['auth','analista']], function () {

    route::resource('vulnerabilidad','VulnerabilidadController');
    Route::resource('control','ControlRiesgoController');
    Route::resource('activo','ActivoController');

    Route::auth();

});

Route::group(['middleware' =>  ['auth','consultor']], function () {

    route::resource('vulnerabilidad','VulnerabilidadController');
    Route::resource('control','ControlRiesgoController');
    Route::resource('activo','ActivoController');

    Route::auth();

});

Route::group(['middleware' =>  ['auth','gerencia']], function () {

    route::resource('empresa','EmpresaController');
    Route::get('/Bienvenido', 'HomeController@index');
    Route::auth();

});

Route::group(['middleware' =>  ['auth','alltype']], function () {

    Route::get('/Bienvenido', 'HomeController@index');
    Route::get('/{slug?}', 'HomeController@index');
    Route::auth();


});

*/



