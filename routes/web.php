<?php

use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\GestionFundacionController;
use App\Http\Controllers\GestionUserController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\RepresentanteController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\SolicitudRController;
use App\Http\Controllers\TablonController;
use App\Http\Controllers\UsuarioController;
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
    return view('portada');
});

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('/usuarios',GestionUserController::class)->middleware('auth');
Route::resource('/perfil',PerfilController::class)->middleware('auth');
Route::resource('/solicitudes',SolicitudController::class)->middleware('auth');
Route::resource('/gestionfundacion',GestionFundacionController::class)->middleware('auth');
Route::resource('/representantes',RepresentanteController::class)->middleware('auth');
Route::resource('/administradores',AdministradorController::class)->middleware('auth');
Route::resource('/solicitudr',SolicitudRController::class)->middleware('auth');
Route::resource('/publicaciones',PublicacionController::class)->middleware('auth');
Route::resource('/tablon',TablonController::class);

Route::get('/publistore/{id}',[PublicacionController::class,'store'])->name('publistore');


/* Route::get('/perfil',[UsuarioController::class, 'perfil'])->middleware('auth');
Route::get('/perfileditar/{id}',[UsuarioController::class,'edit'])->name('profile.update')
->middleware('auth');
Route::put('/solicitudes/{id}',[SolicitudController::class,'cambio']); 
*/




