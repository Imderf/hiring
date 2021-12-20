<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\AuthenticatesUsers; 

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
    if (!Auth::check()) {
        //$id = Auth::user()->getId();
        return Redirect::route('login');
    } else {
        return Redirect::route('dashboard.index');
    }
});

/* Route::get('auth/google', 'Auth\LoginController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\LoginController@handleGoogleCallback');
Route::get('auth/logout', 'Auth\LoginController@logout'); */

Route::middleware(['auth'])->group(function () {

    Route::resource('users', 'UserController'); //CRUD
    
});

Auth::routes();

Route::get('/confirm_register', function () {
    return view('auth.confirm_register');
})->name('auth.confirm_register');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard.index');

Route::get('/vacante', function () {
    return view('vacante.index');
})->name('vacante.index');
Route::get('/solicitud', function () {
    return view('solicitud.index');
})->name('solicitud.index');
Route::get('/solicitud_editar', function () {
    return view('solicitud.editar');
})->name('solicitud.editar');
Route::get('/solicitud_ver', function () {
    return view('solicitud.ver');
})->name('solicitud.ver');
Route::get('/registros', function () {
    return view('registros.index');
})->name('registros.index');
Route::get('/usuarios', function () {
    return view('usuarios.index');
})->name('usuarios.index');



Route::post('proyectos', 'ProyectoController@store')->name('proyectos.store');

//POSTULANTES FORMULARIO
Route::get('/postulantes', 'PostulantesController@index')->name('postulantes');
/* Route::get('/new_postulantes', 'PostulantesController@create'); */
Route::post('/create_postulantes', 'PostulantesController@store');

//VACANTES
Route::get('/vacantes', 'VacantesController@index')->name('vaca');
Route::get('/vacantes/{id}', 'VacantesController@buscar_funciones_requisitos');
Route::post('/create_vacantes', 'VacantesController@store');

Route::get('/vacantes/user/{id}', 'VacantesController@buscar_usuario');

Route::get('/vacantes/cargos/{id}', 'VacantesController@buscar_cargo_descripcion');


Route::get('/usuarioss', 'UserController@index')->name('users');
Route::get('/usuarioss/approved/{id}', 'UserController@status_approved')->name('user_approved');
Route::get('/usuarioss/invalid/{id}', 'UserController@status_invalid')->name('user_invalid');

Route::get('/home', 'HomeController@index')->name('home');

//google authenticate
Route::get('/login_google', 'Auth\LoginController@redirectToProvider');
Route::get('/confirm_register', 'Auth\LoginController@handleProviderCallback');
Route::get('auth/logout', 'Auth\LoginController@logout');