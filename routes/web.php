<?php

use App\Http\Controllers\GestionUserController;
use App\Http\Controllers\MascotaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Route::get('/portada', function () {
    return view('portada');
});

Route::get('/login2', function () {
    return view('login2');
});

Route::get('/register2', function () {
    return view('register2');
});

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/mascotas',MascotaController::class);

Route::resource('/usuarios',GestionUserController::class);
