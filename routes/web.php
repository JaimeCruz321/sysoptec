<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputadoraController;
use App\Http\Controllers\ResponsableController;
use App\Http\Controllers\AsignacionController;
use App\Http\Controllers\SoporteController;

use Illuminate\Support\Facades\Route;



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
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name ('users.index');


//Rutas modulo Area
Route::get('areas', [AreaController::class, 'index'])->name('areas.index');
Route::get('areas/create', [AreaController::class, 'create'])->name('areas.create');
Route::post('areas', [AreaController::class, 'store'])->name('areas.store');
Route::get('areas/{area}', [AreaController::class, 'show'])->name('areas.show');
Route::get('areas/{area}/edit', [AreaController::class, 'edit'])->name('areas.edit');
Route::put('areas/{area}', [AreaController::class, 'update'])->name('areas.update');
Route::delete('areas/{area}', [AreaController::class, 'destroy'])->name('areas.destroy');

// Rutas modulo Responsables
Route::get('responsables', [ResponsableController::class, 'index'])->name('responsables.index');

Route::get('responsables/create', [ResponsableController::class, 'create'])->name('responsables.create');

Route::post('responsables', [ResponsableController::class, 'store'])->name('responsables.store');
 
Route::get('responsables/{responsable}', [ResponsableController::class, 'show'])->name('responsables.show');

Route::get('responsables/{responsable}/edit', [ResponsableController::class, 'edit'])->name('responsables.edit');

Route::put('responsables/{responsable}', [ResponsableController::class, 'update'])->name('responsables.update');

Route::delete('responsables/{responsable}', [ResponsableController::class, 'destroy'])->name('responsables.destroy');


// Rutas modulo Computadora
Route::get('/computer', [ComputadoraController::class, 'index'])->name('computer.index');

Route::get('/computer/asignadas', [ComputadoraController::class, 'asignados'])->name('computer.asignadas');

Route::get('/computer/disponibles', [ComputadoraController::class, 'disponibles'])->name('computer.disponibles');

Route::get('/computer/create', [ComputadoraController::class, 'create'])->name('computer.create');

Route::post('computer', [ComputadoraController::class, 'store'])->name('computer.store');

Route::get('computer/{computadora}', [ComputadoraController::class, 'show'])->name('computer.show');

Route::get('computer/{computadora}/edit', [ComputadoraController::class, 'edit'])->name('computer.edit');

Route::put('computer/{computadora}', [ComputadoraController::class, 'update'])->name('computer.update');

Route::delete('computer/{computadora}', [ComputadoraController::class, 'destroy'])->name('computadoras.destroy');

//Route::get('computer/{computadora}/consulta', [ComputadoraController::class, 'consulta'])->name('computer.consulta');


//Rutas al modulo asignacion

Route::get('asignacions', [AsignacionController::class, 'index'])->name('asignacions.index');

Route::get('asignacions/create', [AsignacionController::class, 'create'])->name('asignacions.create');

Route::post('asignacions', [AsignacionController::class, 'store'])->name('asignacions.store');
 
Route::get('asignacions/{asignacion}', [AsignacionController::class, 'show'])->name('asignacions.show');

Route::get('asignacions/{asignacion}/edit', [AsignacionController::class, 'edit'])->name('asignacions.edit');

Route::put('asignacions/{asignacion}', [AsignacionController::class, 'update'])->name('asignacions.update');

Route::delete('asignacions/{asignacion}', [AsignacionController::class, 'destroy'])->name('asignacions.destroy');

//Rutas al modulo soporte

Route::get('soportes{computadora}', [SoporteController::class, 'index'])->name('soportes.index');

Route::get('soportes/{computadora}/create', [SoporteController::class, 'create'])->name('soportes.create');

Route::post('soportes', [SoporteController::class, 'store'])->name('soportes.store');
 
Route::get('soportes/{soporte}', [SoporteController::class, 'show'])->name('soportes.show');

Route::get('soportes/{soporte}/edit', [SoporteController::class, 'edit'])->name('soportes.edit');

Route::put('soportes/{soporte}', [SoporteController::class, 'update'])->name('soportes.update');

Route::delete('soportes/{soporte}', [SoporteController::class, 'destroy'])->name('soportes.destroy');