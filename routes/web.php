<?php

use Illuminate\Support\Facades\Route;

//Importamos nuestro controlador
use App\Http\Controllers\IndexController;


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

Route::get('/', function () {
    return view('welcome');
});



