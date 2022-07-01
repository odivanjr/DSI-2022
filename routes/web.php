<?php

use App\Http\Controllers\LivroController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\Router;
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

// ==================================== PRODUTOS ================================================

Route::get('/produto', [ProdutoController::class, 'index'])->name('produto');

Route::get('/produto/criar', [ProdutoController::class, 'criar'])->name('produto.criar');

Route::post('/produto/criar', [ProdutoController::class, 'inserir']);

Route::get('/produto/ver/{prod}', [ProdutoController::class, 'ver'])->name('produto.ver');

// ==================================== BIBLIOTECA ================================================

Route::get('/livro', [LivroController::class, 'index'])->name('livro');

Route::get('/livro/criar', [LivroController::class, 'criar'])->name('livro.criar');

Route::post('/livro/criar', [LivroController::class, 'inserir']);

Route::get('/livro/ver/{book}', [LivroController::class, 'ver'])->name('livro.ver');

// =========================== ALTERAÇÕES DA AULA DO DIA 09/06/2022 =====================================

Route::get('/livro/editar/{book}', [LivroController::class, 'editar'])->name('livro.editar');

Route::put('/livro/editar/{book}', [LivroController::class, 'editarGravar']);

// =========================== ALTERAÇÕES DA AULA DO DIA 23/06/2022 =====================================

Route::get('/login', [UsuariosController::class,'index'])->name('usuario.index');

Route::post('/login', [UsuariosController::class, 'login'])->name('usuario.login');

Route::get('/logout', [UsuariosController::class, 'logout'])->name('usuario.logout');

// =========================== ALTERAÇÕES DA AULA DO DIA 30/06/2022 =====================================

Route::delete('/livro/apagar/{book}', [LivroController::class, 'apagar'])->name('livro.apagar');