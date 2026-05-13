<?php

use Illuminate\Support\Facades\Route;

// Importação de TODOS os seus Controllers
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\SobreController;
use App\Http\Controllers\Site\ServicesController;
use App\Http\Controllers\Site\CardapioController;
use App\Http\Controllers\Site\BannerController;


use App\Http\Controllers\admin\DashController;

/*
|--------------------------------------------------------------------------
| Web Routes - Confeitaria DaVilla
|--------------------------------------------------------------------------
*/

// 1. A ROTA PRINCIPAL (A que monta a Home inteira)D
Route::get("/", [HomeController::class, 'home'])->name('home');

// 2. ROTAS INDIVIDUAIS (Caso você queira acessar as páginas separadamente)
Route::get("/sobre", [SobreController::class, 'sobre'])->name('sobre');
Route::get("/services", [ServicesController::class, 'services'])->name('services');
Route::get("/cardapio", [CardapioController::class, 'cardapio'])->name('cardapio');


Route::get('/home/produto/{slug}', [HomeController::class, 'linkProduto'])->name('banner');
 
 
Route::get('/cardapio/categoria/{id}', [CardapioController::class, 'show'])->name('cardapio.categoria');
 
/** Submenu de produto */
Route::get('/cardapio/produto/{slug}', [CardapioController::class, 'showProduto'])->name('cardapio.produto');
 
 
Route::get('/regiao/area/{id}', [RegiaoController::class, 'show'])->name('regiao.area');

Route::get('/', [BannerController::class, 'index'])->name('home');



Route::prefix('admin')->name('admin.')->group(function(){

   Route::get('/', [DashController::class, 'index'])->name('dash');

});