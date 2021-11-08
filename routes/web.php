<?php

use Illuminate\Support\Facades\Route,
    App\Http\Controllers\ProductoController,
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

Route::resource('productos', ProductoController::class);

Route::resource('categorias', CategoriaController::class);