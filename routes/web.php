<?php

use App\Http\Controllers\ProdutoController;
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
    return view('welcome');
});

Route::get('/produto', [ProdutoController::class, 'index']);

Route::get('/produto/criar', [ProdutoController::class, 'criar'])->name('produto.criar');

Route::get('/produto/ver', [ProdutoController::class, 'ver']->name('produto.ver'));