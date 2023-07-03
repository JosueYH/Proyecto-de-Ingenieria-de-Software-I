<?php

use Illuminate\Support\Facades\Route;

//Importamos nuestro controlador
use App\Http\Controllers\IndexController;

//controlador para mostrar registros de Litigantes
use App\Http\Controllers\LitiganteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'actionIndex']);

//Route::get('/mostrar-registros', 'NombreControlador@mostrarRegistros');

Route::get('litigante/mostrar', [LitiganteController::class, 'actionGetAll']);
//Route::get('litigante/mostrar', [LitiganteController::class, 'mostrarRegistros']);

Route::match(['get', 'post'], 'litigante/insertar', [LitiganteController::class, 'actionInsert']);

/*
Route::get('/', function () {
    return view('welcome');
});
*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
