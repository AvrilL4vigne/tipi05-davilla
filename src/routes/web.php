<?php

use Illuminate\Support\Facades\Route;

// Importação de TODOS os seus Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\ActionController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PortifoliooController;

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
Route::get("/pricing", [PricingController::class, 'pricing'])->name('pricing');
Route::get("/recipes", [RecipesController::class, 'recipes'])->name('recipes');
Route::get("/testimonials", [TestimonialsController::class, 'testimonials'])->name('testimonials');
Route::get('/portifolio', [PortifolioController::class, 'portfolio'])->name('portfolio');
Route::get("/features", [FeaturesController::class, 'features'])->name('features');
Route::get("/action", [ActionController::class, 'action'])->name('action');
Route::get("/welcome", [WelcomeController::class, 'welcome'])->name('welcome');
Route::get("/slider", [SliderController::class, 'slider'])->name('slider');
Route::get("/cardapio", [App\Http\Controllers\CardapioController::class, 'cardapio'])->name('cardapio');

 
 
Route::get('/cardapio/categoria/{id}', [CardapioController::class, 'show'])->name('cardapio.categoria');
 
/** Submenu de produto */
Route::get('/cardapio/produto/{id}', [CardapioController::class, 'showProduto'])->name('cardapio.produto');
 
 
Route::get('/regiao/area/{id}', [RegiaoController::class, 'show'])->name('regiao.area');
