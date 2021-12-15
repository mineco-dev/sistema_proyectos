<?php

use App\Http\Controllers\BodegaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Catalogos\CatalogoController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\InsumoController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\DependencyController;
use App\Http\Livewire\Provider\Index;
use App\Http\Livewire\Ingreso\Form;

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

Route::view('/dashboard','index')->name('dashboard');
//Route::view('/insumos','catalogos.insumos')->name('insumos');
Route::get('/proveedor',[index::class,'render'])->name('proveedores');
Route::get('/categorias',[CatalogoController::class,'categorias'])->name('categorias')->middleware('auth');
Route::get('/categoria/{id}/subcategorias',[CatalogoController::class,'subcategorias'])->name('subcategorias')->middleware('auth');

Route::resource('categoria',CategoryController::class)->middleware('auth');
Route::resource('subcategoria',SubcategoryController::class)->middleware('auth');
Route::resource('presentaciones',PresentationController::class)->middleware('auth');
Route::resource('dependencias',DependencyController::class)->middleware('auth');
Route::resource('insumos',InsumoController::class)->middleware('auth');
Route::resource('proveedores',ProviderController::class)->except('index')->middleware('auth');
Route::resource('bodegas',BodegaController::class)->middleware('auth');


/* RUTAS DE INGRESO */
Route::get('crear-ingreso',Form::class,'render')->name('ingreso-live');
Route::resource('ingreso',IngresoController::class)->middleware('auth');
/* 
 */

/*------------------------------------------------------------------------------*/


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard1', function () {
    return view('dashboard');
})->name('dashboard1');
