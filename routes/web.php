<?php

use App\Http\Controllers\BodegaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Catalogos\CatalogoController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CooperacionController;
use App\Http\Controllers\CooperationTypeController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\InsumoController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\DependencyController;
use App\Http\Controllers\ProjectController;
use App\Http\Livewire\Catalogos\Cooperacion;
use App\Http\Livewire\Catalogos\CooperationType;
use App\Http\Livewire\Provider\Index;
use App\Http\Livewire\Ingreso\Form;
use App\Http\Livewire\Proyectos\ContactList;
use App\Http\Livewire\Proyectos\Crear;
use App\Http\Livewire\Proyectos\Expediente;
use App\Http\Livewire\Proyectos\ProyectoShow;
use App\Http\Livewire\Proyectos\Vigencia;
use App\Models\Contact;

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


/*PROYECTOS*/
Route::resource('proyecto',ProjectController::class)->middleware('auth');

Route::get('/cat-cooperacion',Cooperacion::class)->name('catalogo-cooperacion')->middleware('auth');
Route::resource('cooperacion',CooperacionController::class)->middleware('auth');

Route::get('/cat-tipo-cooperacion',CooperationType::class)->name('catalogo-tipo-cooperacion')->middleware('auth');
Route::resource('tipo-cooperacion',CooperationTypeController::class)->middleware('auth');

Route::get('proyectos/{project}/vigencia',Vigencia::class)->name('proyectos-vigencia');
Route::get('proyectos/{project}/contactos',ContactList::class)->name('proyectos-contactos');
Route::get('proyectos/{project}/expediente',Expediente::class)->name('proyecto-expediente');

Route::get('proyectos/{project}/mostrar',ProyectoShow::class)->name('proyectos-mostrar')->middleware('auth');

Route::post('proyecto/cargar-expediente',[ProjectController::class,'cargarExpediente'])->name('cargar-expediente');

/*FORMS*/
Route::get('proyectos/crear',Crear::class)->name('proyectos-crear')->middleware('auth');


/* RUTAS DE INGRESO */
Route::get('crear-ingreso',Form::class,'render')->name('ingreso-live');
Route::resource('ingreso',IngresoController::class)->middleware('auth');
/* 
 */

/*------------------------------------------------------------------------------*/


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard1', function () {
    return view('dashboard');
})->name('dashboard1');
