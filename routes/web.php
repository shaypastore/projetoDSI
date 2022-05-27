<?php

use App\Http\Controllers\PratoController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

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
    return view('entrada');
});
//---------------------------Produtos-------------------------
Route::get('/produto', [ProdutoController::class, 'index'])->name('produto');
Route::get('/produto/criar', [ProdutoController::class, 'criar'])->name('produto/criar');
Route::get('/produto/ver/{prod}', [ProdutoController::class, 'ver'])->name('produto/ver');

Route::post('/produto/criar', [ProdutoController::class, 'inserir'])->name('produto/inserir');


//---------------------------Pratos-------------------------

Route::get('/prato', [PratoController::class, 'index'])->name('prato');
Route::get('/prato/criar', [PratoController::class, 'criar'])->name('prato/criar');
Route::get('/prato/ver/{pra}', [PratoController::class, 'ver'])->name('prato/ver');

Route::post('/prato/criar', [PratoController::class, 'inserir'])->name('prato/inserir');