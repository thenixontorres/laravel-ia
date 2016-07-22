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

//Route::group(['middleware' => 'auth'], function(){

	Route::get('/', [
	    'uses'  =>  'homeController@index',
	    'as'    =>  'home',
	]);

	Route::get('/cursos', [
	    'uses'  =>  'paginaController@cursos',
	    'as'    =>  'paginas.cursos',
	]);

	Route::get('/certificacion', [
	    'uses'  =>  'paginaController@certificacion',
	    'as'    =>  'paginas.certificacion',
	]);

	Route::get('/servicios', [
	    'uses'  =>  'paginaController@servicios',
	    'as'    =>  'paginas.servicios',
	]);

	Route::get('/catalogo', [
	    'uses'  =>  'paginaController@catalogo',
	    'as'    =>  'paginas.catalogo',
	]);

	Route::get('/galerias', [
	    'uses'  =>  'paginaController@galerias',
	    'as'    =>  'paginas.galerias',
	]);

	Route::get('/video', [
	    'uses'  =>  'paginaController@video',
	    'as'    =>  'paginas.video',
	]);

	Route::get('/nosotros', [
	    'uses'  =>  'paginaController@nosotros',
	    'as'    =>  'paginas.nosotros',
	]);

	Route::get('/contactenos', [
	    'uses'  =>  'paginaController@contactenos',
	    'as'    =>  'paginas.contactenos',
	]);

//});

//Route::get('/login', [
    //'uses'  => 'Auth\AuthController@getLogin',
    //'as'    => 'auth.login'
//]);
//Route::post('/login', [
  //  'uses'  => 'Auth\AuthController@postLogin',
   // 'as'    => 'auth.login'
//]);
//Route::get('/logout', [
  //  'uses'  => 'Auth\AuthController@getLogout',
   // 'as'    => 'auth.logout'
//]);

