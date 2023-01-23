<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SaleController;


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
    //return view('welcome');
    return view('inicio');
})->name('inicio');

Route::get('posts', [PostController::class, 'index'])
->name('posts');

Route::get('post/{id}', [PostController::class, 'show'])
->whereNumber('id')
->name('post');

// Route::get('libros', [LibrosController::class, 'listarLibros']);

// Route::get('listar10primos', [OperacionesController::class, 'listar10Primos']);
// Route::get('factorial/{numero}', [OperacionesController::class, 'factorial']);

Route::resource('posts', PostController::class)
->except(['store', 'update', 'destroy'])
->names([
    'index' => 'posts',
    'show' => 'post',
    'create' => 'crearPost',
    'edit' => 'editarPost',
]);

Route::resource('sales', SaleController::class)
->except(['store', 'update', 'destroy'])
->names([
    'index' => 'sales',
    'show' => 'sale',
    'create' => 'crearSale',
    'edit' => 'editarSale',
]);

Route::get('sales', [SaleController::class, 'index'])
->name('sales');

Route::get('sale/{id}', [SaleController::class, 'show'])
->whereNumber('id')
->name('sale');
