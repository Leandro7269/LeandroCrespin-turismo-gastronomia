<?php

use Illuminate\Support\Facades\Route;
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
//Ruta para enviar email
Route::get('/', function() {

	Mail::to("leandroarturo@gmail.com")->send(new TestMail("Leandro"));
	
	return view('dashboard');
});

Route::get('/', function () {
    return view('auth.login');
});
//Route::get('/', 'App\Http\Controllers\UserController'());


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




