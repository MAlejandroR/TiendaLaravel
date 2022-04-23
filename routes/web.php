<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\FamiliaController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\CestaController;

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
    return view('principal');
})->name("tienda");


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::resource("productos",ProductoController::class);
Route::resource("tiendas",TiendaController::class);
Route::resource("familias",FamiliaController::class);
Route::resource("stocks",StockController::class);
Route::resource("cesta", StockController::class);
Route::post("cesta/add", [CestaController::class,"add"])->name("cesta.add");
