<?php

use Illuminate\Support\Facades\Route;
//agregamos los controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SoporteController;
use App\Http\Controllers\PrioridadController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\EspacioController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class,);
    //Rutas para area de Soporte
    Route::resource('soportes', SoporteController::class);
    Route::resource('prioridads', PrioridadController::class);
    Route::resource('estados', EstadoController::class);
    //Ruta para área de espacios
    Route::resource('tipos', TipoController::class);
    Route::resource('espacios', EspacioController::class);

});
