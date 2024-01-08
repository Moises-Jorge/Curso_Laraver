<?php

use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
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

Route::resource('produtos', ProdutoController::class);

Route::get('/', [SiteController::class, 'index'])->name('site.index');

// Rota responsável por apresentar os detalhes de cada produto
Route::get('/produto/{slug}', [SiteController::class, 'details'])->name('site.details');

//Rota para listar os produtos de uma determinada categoria
Route::get('/categoria/{id}', [SiteController::class, 'categoria'])->name('site.categoria');

// Rota responsável pelas ações do carrinho
Route::get('/carrinho', [CarrinhoController::class, 'carrinhoLista'])->name('site.carrinho');