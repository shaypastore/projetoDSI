<?php

<<<<<<< HEAD
use App\Http\Controllers\ArtigoController;
use App\Http\Controllers\IndexController;
=======
//use App\Http\Controllers\PratoController;
use App\Http\Controllers\TextoController;
>>>>>>> 8f5a2aaa2c47d656d5eb35c8f65e26d7ff038f3b
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

<<<<<<< HEAD
Route::get('/', [IndexController::class, 'index']);
//---------------------------Artigos-------------------------
Route::get('/artigo', [ArtigoController::class, 'index'])->name('artigo');
Route::get('/artigo/criar', [ArtigoController::class, 'criar'])->name('artigo/criar');
Route::get('/artigo/ver/{art}', [ArtigoController::class, 'ver'])->name('artigo/ver');

Route::post('/artigo/criar', [ArtigoController::class, 'inserir'])->name('artigo/inserir');

Route::get('/artigo/editar/{art}', [ArtigoController::class, 'editar'])->name('artigo/editar');
Route::put('/artigo/editar/{art}', [ArtigoController::class, 'editarGravar']);
=======
Route::get('/', function () {
    return view('entrada');
});
//---------------------------Textos-------------------------
Route::get('/texto', [TextoController::class, 'index'])->name('texto');
Route::get('/texto/criar', [TextoController::class, 'criar'])->name('texto/criar');
Route::get('/texto/ver/{tex}', [TextoController::class, 'ver'])->name('texto/ver');
Route::post('/texto/criar', [TextoController::class, 'inserir'])->name('texto/inserir');
Route::get('/texto/editar/{tex}', [TextoController::class, 'editar'])->name('texto/editar');
Route::put('/texto/editar/{tex}', [TextoController::class, 'editarGravar']);

//---------------------------Pratos-------------------------
//Route::get('/prato', [PratoController::class, 'index'])->name('prato');
//Route::get('/prato/criar', [PratoController::class, 'criar'])->name('prato/criar');
//Route::get('/prato/ver/{pra}', [PratoController::class, 'ver'])->name('prato/ver');
//Route::post('/prato/criar', [PratoController::class, 'inserir'])->name('prato/inserir');
>>>>>>> 8f5a2aaa2c47d656d5eb35c8f65e26d7ff038f3b

//----------------------------Usuários---------------------------------
Route::get('login', [UsuariosController::class, 'index'])->name('usuario.index');
Route::post('login', [UsuariosController::class, 'login'])->name('usuario.login');
Route::get('logout', [UsuariosController::class, 'logout'])->name('usuario.logout');