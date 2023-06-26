<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LitiganteController; //Importamos
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

//Para mostrar Registros de la Tabla Litigante
//Route::get('/mostrar-registros', 'TuControlador@mostrarRegistros')->name('mostrar.registros');
Route::get('/mostrar-registros', 'Tlitigante')->name('mostrar.registros');

//Para eliminar un registro
Route::get('/eliminar/{litigante_id}', 'TLitigante')->name('eliminar.registro');

//Route::get('city/getall', [CityController::class, 'actionGetAll']);
//Route::match(['get', 'post'], 'city/insert', [CityController::class, 'actionInsert']);



