<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

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
    return view('auth.login');
});

//Ruta home del controlador
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Ruta para enviar email
//Route::get('/', function() {
//Mail::to("leandroarturo@gmail.com")->send(new TestMail("Leandro"));
	//return view('welcome');
//});

//crud de user
Route::get('user', 'App\Http\Controllers\UserController@index');#->name('user.index')->middleware('permission:user lista');
Route::get('user/{user}/edit', 'App\Http\Controllers\UserController@edit')->name('user.edit')->middleware('permission:user editar');
Route::get('user/create', 'App\Http\Controllers\UserController@create')->name('user.create')->middleware('permission:user agregar');
Route::post('user', 'App\Http\Controllers\UserController@store')->name('user.store')->middleware('permission:user agregar');
Route::put('user', 'App\Http\Controllers\UserController@update')->name('user.update')->middleware('permission:user editar');
Route::delete('user/{user}', 'App\Http\Controllers\UserController@destroy')->name('user.destroy')->middleware('permission:user borrar');

//crud de tipo_comida
Route::get('tipo_comida', 'App\Http\Controllers\Tipo_comidaController@index')->name('Tipo_comida.index')->middleware('permission:tipo_comida lista');
Route::get('tipo_comida/{id}/edit', 'App\Http\Controllers\Tipo_comidaController@edit')->name('Tipo_comida.edit')->middleware('permission:tipo_comida editar');
Route::get('tipo_comida/create', 'App\Http\Controllers\Tipo_comidaController@create')->name('Tipo_comida.create')->middleware('permission:tipo_comida agregar');
Route::post('tipo_comida', 'App\Http\Controllers\Tipo_comidaController@store')->name('Tipo_comida.store')->middleware('permission:tipo_comida agregar');
Route::put('tipo_comida', 'App\Http\Controllers\Tipo_comidaController@update')->name('Tipo_comida.update')->middleware('permission:tipo_comida editar');
Route::delete('tipo_comida/{id}', 'App\Http\Controllers\Tipo_comidaController@destroy')->name('Tipo_comida.destroy')->middleware('permission:tipo_comida borrar');

//crud de tipo de negocio
Route::get('tipo_negocio', 'App\Http\Controllers\Tipo_negocioController@index')->name('Tipo_negocio.index')->middleware('permission:tipo_negocio lista');
Route::get('tipo_negocio/{id}/edit', 'App\Http\Controllers\Tipo_negocioController@edit')->name('tipo_negocio.edit')->middleware('permission:tipo_negocio editar');
Route::get('tipo_negocio/create', 'App\Http\Controllers\Tipo_negocioController@create')->name('tipo_negocio.create')->middleware('permission:tipo_negocio agregar');
Route::post('tipo_negocio', 'App\Http\Controllers\Tipo_negocioController@store')->name('tipo_negocio.store')->middleware('permission:tipo_negocio agregar');
Route::put('tipo_negocio', 'App\Http\Controllers\TTipo_negocioController@update')->name('tipo_negocio.update')->middleware('permission:tipo_negocio editar');
Route::delete('tipo_negocio/{id}', 'App\Http\Controllers\Tipo_negocioController@destroy')->name('tipo_negocio.destroy')->middleware('permission:tipo_negocio borrar');

//crud de sucursales
Route::get('sucursales', 'App\Http\Controllers\SucursalesController@index')->name('sucursales.index')->middleware('permission:sucursales lista');
Route::get('sucursales/{id}/edit', 'App\Http\Controllers\SucursalesController@edit')->name('sucursales.edit')->middleware('permission:sucursales editar');
Route::get('sucursales/create', 'App\Http\Controllers\SucursalesController@create')->name('sucursales.create')->middleware('permission:sucursales agregar');
Route::post('sucursales', 'App\Http\Controllers\SucursalesController@store')->name('sucursales.store')->middleware('permission:sucursales agregar');
Route::put('sucursales', 'App\Http\Controllers\SucursalesController@update')->name('sucursales.update')->middleware('permission:sucursales editar');
Route::delete('sucursales/{id}', 'App\Http\Controllers\SucursalesController@destroy')->name('sucursales.destroy')->middleware('permission:sucursales borrar');

//crud de locales
Route::get('locales', 'App\Http\Controllers\LocalesController@index')->name('locales.index')->middleware('permission:locales lista');
Route::get('locales/{id}/edit', 'App\Http\Controllers\LocalesController@edit')->name('locales.edit')->middleware('permission:locales editar');
Route::get('locales/create', 'App\Http\Controllers\LocalesController@create')->name('locales.create')->middleware('permission:locales agregar');
Route::post('locales', 'App\Http\Controllers\LocalesController@store')->name('locales.store')->middleware('permission:locales agregar');
Route::put('locales', 'App\Http\Controllers\LocalesController@update')->name('locales.update')->middleware('permission:locales editar');
Route::delete('locales/{id}', 'App\Http\Controllers\LocalesController@destroy')->name('locales.destroy')->middleware('permission:locales borrar');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




