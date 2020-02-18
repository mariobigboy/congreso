<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are  aded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', ['as' =>'landing',  'uses' => 'LandingController@index']);

/*Route::get('/', function () {
    return view('home');
});*/
Route::get('/home', function(){
	return view('home');
});

Route::post('/inscripcion', ['as' => 'inscripcion.store', 'uses' => 'InscripcionController@store']);

Route::get('/inscripcion', ['as' => 'inscripcion.index', 'uses' => 'InscripcionController@index']);

Auth::routes();
Route::get('/admin', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
	Route::get('maps', ['as' => 'pages.maps', 'uses' => 'PageController@maps']);
	Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);
	Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'PageController@rtl']);
	Route::get('tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables']);
	Route::get('typography', ['as' => 'pages.typography', 'uses' => 'PageController@typography']);
	Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'PageController@upgrade']);

	Route::get('disertantes', ['as' => 'pages.disertantes', 'uses' => 'PageController@disertantes']);
	
	Route::get('galerias', ['as' => 'pages.galerias', 'uses' => 'PageController@galerias']);
});

Route::group(['middleware' => 'auth'], function(){
	Route::get('asistentes', ['as' => 'asistentes.index', 'uses' => 'AsistentesController@index']);
	Route::get('asistentes/create', ['as' => 'asistentes.create', 'uses' => 'AsistentesController@create']);
});

Route::group(['middleware' => 'auth'], function(){
	Route::post('disertantes/update', ['as' => 'disertantes.update', 'uses' => 'DisertantesController@update']);
	Route::get('disertantes/edit/{id}', ['as' => 'disertantes.edit', 'uses' => 'DisertantesController@edit']);	
	Route::get('disertantes/delete/{id}', ['as' => 'disertantes.destroy', 'uses' => 'DisertantesController@destroy']);
	Route::get('disertantes', ['as' => 'disertantes.index', 'uses' => 'DisertantesController@index']);
	Route::post('disertantes', ['as' => 'disertantes.store', 'uses' => 'DisertantesController@store']);
	Route::get('disertantes/create', ['as' => 'disertantes.create', 'uses' => 'DisertantesController@create']);
});



Route::group(['middleware' => 'auth'], function(){
	Route::get('noticias', ['as' => 'noticias.index', 'uses' => 'NoticiasController@index']);
	Route::get('noticias/create', ['as' => 'noticias.create', 'uses' => 'NoticiasController@create']);
	Route::post('noticias', ['as' => 'noticias.store', 'uses' => 'NoticiasController@store']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::post('profile', ['as' => 'profile.updatepicture', 'uses' => 'ProfileController@updatePicture']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function(){
	Route::get('programas', ['as' => 'programas.index', 'uses' => 'ProgramasController@index']);
	Route::get('programas/create', ['as' => 'programas.create', 'uses' => 'ProgramasController@create']);
});

Route::group(['middleware' => 'auth'], function(){
	Route::get('/cursos', ['as' => 'cursos.index', 'uses' => 'CursosController@index']);
	Route::get('/cursos/create', ['as' => 'cursos.create', 'uses' => 'CursosController@create']);
	Route::post('/cursos/create', ['as' => 'cursos.store', 'uses' => 'CursosController@store']);
	Route::get('/cursos/delete/{id}', ['as' => 'cursos.destroy', 'uses' => 'CursosController@destroy']);
	Route::get('/cursos/edit/{id}', ['as' => 'cursos.edit', 'uses' => 'CursosController@edit']);
});
