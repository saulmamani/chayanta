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
  //return redirect('home');
  return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('carreras', 'CarreraController');

Route::resource('facilitadors', 'FacilitadorController');

Route::resource('estudiantes', 'EstudianteController');

Route::resource('comunicados', 'ComunicadoController');


Route::resource('documentoInstitucionals', 'DocumentoInstitucionalController');

Route::resource('documentoBibliograficos', 'DocumentoBibliograficoController');

Route::resource('users','UserController');

Route::get('/bibliograficos', 'ReportesController@buscarMaterial');

Route::get('/institucionales', 'ReportesController@buscarDocumentos');

Route::get('comunicados_lista','ReportesController@listarComunicados');

Route::get('carreras_lista','ReportesController@listarCarreras');

Route::get('reportes','ReportesController@reportes');