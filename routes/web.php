<?php

use Illuminate\Support\Facades\Route,
    App\Http\Controllers\ProductoController,
    App\Http\Controllers\ClienteController,
    App\Http\Controllers\CategoriaController;

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


// Rutas de Productos
Route::resource('productos', ProductoController::class);

// Rutas para realizar una compra
Route::resource('clientes', ClienteController::class);

// Rutas de Categorias
Route::resource('categorias', CategoriaController::class);