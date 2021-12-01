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

Route::get('auth/google', 'Auth\LoginController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\LoginController@handleGoogleCallback');
Route::get('auth/logout', 'Auth\LoginController@logout');

Route::middleware(['auth'])->group(function () {

    Route::resource('users', 'UserController'); //CRUD
    
});

Auth::routes();

/* Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard.index');
Route::get('/propuestas', function () {
    return view('propuestas.index');
})->name('propuestas.index');
Route::get('/contratos', function () {
    return view('contratos.index'); 
})->name('contratos.index');*/
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

Route::resource('prospectos', 'ProspectoController'); //CRUD

Route::post('proyectos', 'ProyectoController@store')->name('proyectos.store');

Route::get('propuestas', 'PropuestaController@index')->name('propuestas.index');
Route::post('propuestas', 'PropuestaController@store')->name('propuestas.store');
Route::post('propuestas/editarajax', 'PropuestaController@editarajax')->name('propuestas.editarajax');

Route::get('/contratos', 'ContratoController@index')->name('contratos.index');

Route::get('/contratos-ver', function () {
    return view('contratos.ver');
})->name('contratos.ver');

Route::get('/contratos-facturas', function () {
    return view('contratos.facturas');
})->name('contratos.facturas');

Route::get('/reportes', function () {
    return view('reportes.index');
})->name('reportes.index');

Route::get('/aop', function () {
    return view('aop.index');
})->name('aop.index');

Route::get('/equipo', function () {
    return view('equipo.index');
})->name('equipo.index');

Route::get('/clientes', function () {
    return view('clientes.index');
})->name('clientes.index');

Route::get('/cliente', function () {
    return view('clientes.cliente');
})->name('clientes.cliente');

Route::get('/cliente-aop', function () {
    return view('clientes.aop');
})->name('clientes.aop');

Route::get('/cliente-time', function () {
    return view('clientes.time');
})->name('clientes.time');

//Route::post('users','UserController@store')->name('users.store');
//Route::delete('users/{user}','UserController@destroy')->name('users.destroy');



Route::get('/home', 'HomeController@index')->name('home');
