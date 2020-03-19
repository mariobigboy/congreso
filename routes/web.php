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


//route test:
Route::get('/test', function(){
	//Mail::to('mendezpablo90@gmail.com', 'Pablo')->send(new WelcomeEmail());
	//return redirect()->route('login')->with('confirm_success', '¡Correo confirmado correctamente!');
	
});

//route confirmar:
Route::get('/confirmar', 'TokenController@index');

//landingPage:
Route::get('/', ['as' =>'landing',  'uses' => 'LandingController@index']);

//Rutas de inscripion:
Route::post('/inscripcion', ['as' => 'inscripcion.store', 'uses' => 'InscripcionController@store']);
Route::get('/inscripcion', ['as' => 'inscripcion.index', 'uses' => 'InscripcionController@index']);

//rutas de subscripcion:
Route::post('/subscribe', ['as' => 'subscribe.save', 'uses' => 'SubscribeController@save']);

//rutas de salas:
Route::get('/salas', ['as' => 'salas.index', 'uses' => 'SalasController@index']);

//rutas de contacto:
Route::get('/contacto', ['as' => 'contacto.index', 'uses' => 'ContactoController@index']);
Route::post('/contacto', ['as' => 'contacto.message', 'uses' => 'ContactoController@message']);

//Ruta Comision directiva
Route::get('/comision', ['as' => 'comision.index', 'uses' => 'ComisionDirectiva@index']);

//Rutas de post:
Route::get('/post/{id}', ['as' => 'post.index', 'uses' => 'PostController@index']);

Auth::routes();
Route::get('/admin', 'HomeController@index')->name('home')->middleware('auth');

//Rutas hoteles:
Route::get('/acommodation', ['as' => 'hoteles.accomodation', 'uses' => 'HotelesController@index']);
Route::get('/hotel/{id}', ['as' => 'hoteles.hotel', 'uses' => 'HotelesController@hotel']);

//pages
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
//asistentes
Route::group(['middleware' => 'auth'], function(){
	Route::get('asistentes', ['as' => 'asistentes.index', 'uses' => 'AsistentesController@index']);
	Route::get('asistentes/create', ['as' => 'asistentes.create', 'uses' => 'AsistentesController@create']);
});
//disertantes
Route::get('disertantes/todos', ['as' => 'disertantes.todos', 'uses' => 'DisertantesController@todos']);
Route::get('disertante/{id}', ['as' => 'disertantes.post', 'uses' => 'DisertantesController@post']);
Route::group(['middleware' => 'auth'], function(){
	Route::post('disertantes/update', ['as' => 'disertantes.update', 'uses' => 'DisertantesController@update']);
	Route::get('disertantes/edit/{id}', ['as' => 'disertantes.edit', 'uses' => 'DisertantesController@edit']);	
	Route::get('disertantes/delete/{id}', ['as' => 'disertantes.destroy', 'uses' => 'DisertantesController@destroy']);
	Route::get('disertantes', ['as' => 'disertantes.index', 'uses' => 'DisertantesController@index']);
	Route::post('disertantes', ['as' => 'disertantes.store', 'uses' => 'DisertantesController@store']);
	Route::get('disertantes/create', ['as' => 'disertantes.create', 'uses' => 'DisertantesController@create']);
});
//noticias:
Route::group(['middleware' => 'auth'], function(){
	Route::get('noticias', ['as' => 'noticias.index', 'uses' => 'NoticiasController@index']);
	Route::get('noticias/edit/{id}', ['as' => 'noticias.edit', 'uses' => 'NoticiasController@edit']);
	Route::post('noticias/update', ['as' => 'noticias.update', 'uses' => 'NoticiasController@update']);
	Route::post('noticias', ['as' => 'noticias.store', 'uses' => 'NoticiasController@store']);
	Route::get('noticias/create', ['as' => 'noticias.create', 'uses' => 'NoticiasController@create']);
});
//profile
Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::post('profile', ['as' => 'profile.updatepicture', 'uses' => 'ProfileController@updatePicture']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});
//rutas de programas:
Route::get('/programas/todos', ['as' => 'programas.todos', 'uses' => 'ProgramasController@todos']);
Route::group(['middleware' => 'auth'], function(){
	Route::get('programas', ['as' => 'programas.index', 'uses' => 'ProgramasController@index']);
	Route::get('programas/create', ['as' => 'programas.create', 'uses' => 'ProgramasController@create']);
	Route::post('programas/store', ['as' => 'programas.store', 'uses' => 'ProgramasController@store']);
	Route::post('programas/update', ['as' => 'programas.update', 'uses' => 'ProgramasController@update']);
	Route::get('programas/delete/{id}', ['as' => 'programas.delete', 'uses' => 'ProgramasController@delete']);
	Route::get('programas/edit/{id}', ['as' => 'programas.edit', 'uses' => 'ProgramasController@edit']);
	Route::get('/programas/my', ['as' => 'programas.my', 'uses' => 'ProgramasController@my_programas']);
});

//rutas de workshops:
Route::get('/workshops/todos', ['as' => 'workshops.todos', 'uses' => 'WorkshopController@todos']);
Route::group(['middleware' => 'auth'], function(){
	Route::get('workshops', ['as' => 'workshops.index', 'uses' => 'WorkshopController@index']);
	Route::get('workshops/create', ['as' => 'workshops.create', 'uses' => 'WorkshopController@create']);
	Route::post('workshops/store', ['as' => 'workshops.store', 'uses' => 'WorkshopController@store']);
	Route::post('workshops/update', ['as' => 'workshops.update', 'uses' => 'WorkshopController@update']);
	Route::get('workshops/delete/{id}', ['as' => 'workshops.delete', 'uses' => 'WorkshopController@delete']);
	Route::get('workshops/edit/{id}', ['as' => 'workshops.edit', 'uses' => 'WorkshopController@edit']);
	Route::get('/workshops/my', ['as' => 'workshops.my', 'uses' => 'WorkshopController@my_workshops']);
});
//cursos
Route::get('/cursos/todos', ['as' => 'cursos.todos', 'uses' => 'CursosController@todos']);
Route::get('/curso/{id}', ['as' => 'cursos.view', 'uses' => 'CursosController@view'])->where('id', '[0-9]+');
Route::group(['middleware' => 'auth'], function(){
	Route::get('/cursos', ['as' => 'cursos.index', 'uses' => 'CursosController@index']);
	Route::get('/cursos/create', ['as' => 'cursos.create', 'uses' => 'CursosController@create']);
	Route::post('/cursos/create', ['as' => 'cursos.store', 'uses' => 'CursosController@store']);
	Route::post('/cursos/update', ['as' => 'cursos.update', 'uses' => 'CursosController@update']);
	Route::get('/cursos/delete/{id}', ['as' => 'cursos.destroy', 'uses' => 'CursosController@destroy']);
	Route::get('/cursos/edit/{id}', ['as' => 'cursos.edit', 'uses' => 'CursosController@edit']);
	Route::get('/cursos/my', ['as' => 'cursos.my', 'uses' => 'CursosController@my_curses']);
	Route::post('/cursos/save_my_curses', ['as' => 'cursos.save_my_curses', 'uses' => 'CursosController@save_my_curses']);
});

//Rutas de configuracion:
Route::group(['middleware' => 'auth'], function(){
	Route::get('/configuraciones', ['as' => 'configuraciones.index', 'uses' => 'ConfiguracionesController@index']);
	Route::post('/configuraciones', ['as' => 'configuraciones.save', 'uses' => 'ConfiguracionesController@save']);
});
