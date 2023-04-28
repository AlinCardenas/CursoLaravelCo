<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::controller(ProductoController::class)->group(function(){
  //Route::get('url paa acceder', 'metodo')->name('nombre de la ruta');
    Route::get('productos/index', 'index')->name('productos.index');
    Route::get('productos/create', 'create')->name('productos.create');
    // recibir informacion del formulario 
    Route::post('productos', 'store')->name('productos.store');
    Route::get('productos/{id}','show')->name('productos.show');
    // ruta para enviar a formulario de editar
    Route::get('productos/{producto}/edit', 'edit')->name('productos.edit');
    // ruta para enviar informacionacualizada
    Route::put('productos/{producto}', 'update')->name('productos.update');

});


