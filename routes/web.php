<?php

use App\Http\Controllers\ArtigoController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UsuariosController;
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

Route::get('/', [IndexController::class, 'index'])->name('inicio');
//---------------------------Artigos-------------------------
Route::get('/artigo', [ArtigoController::class, 'index'])->name('artigo');
Route::get('/artigo/criar', [ArtigoController::class, 'criar'])->name('artigo/criar');
Route::get('/artigo/ver/{art}', [ArtigoController::class, 'ver'])->name('artigo/ver');
Route::post('/artigo/criar', [ArtigoController::class, 'inserir'])->name('artigo/inserir');
Route::get('/artigo/editar/{art}', [ArtigoController::class, 'editar'])->name('artigo/editar');
Route::put('/artigo/editar/{art}', [ArtigoController::class, 'editarGravar']);

//----------------------------Usuários---------------------------------
Route::get('login', [UsuariosController::class, 'index'])->name('usuario.index');
Route::post('login', [UsuariosController::class, 'login'])->name('usuario.login');
Route::get('logout', [UsuariosController::class, 'logout'])->name('usuario.logout');

Route::post('comentar', [ArtigoController::class, 'comentar'])->name('comentar');
