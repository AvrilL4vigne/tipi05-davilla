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

// 1. A ROTA PRINCIPAL (A que monta a Home inteira)
Route::get("/", [HomeController::class, 'home'])->name('home');

// 2. ROTAS INDIVIDUAIS (Caso você queira acessar as páginas separadamente)
Route::get("/sobre", [SobreController::class, 'sobre'])->name('sobre');
Route::get("/servicos", [ServicesController::class, 'services'])->name('services');
Route::get("/precos", [PricingController::class, 'index'])->name('pricing');
Route::get("/receitas", [RecipesController::class, 'index'])->name('recipes');
Route::get("/depoimentos", [TestimonialsController::class, 'index'])->name('testimonials');
Route::get('/portifolioo', [PortifoliooController::class, 'index'])->name('portfolioo');

Route::get("/funcionalidades", [FeaturesController::class, 'index'])->name('features');
Route::get("/acao", [ActionController::class, 'index'])->name('action');
Route::get("/boas-vindas", [WelcomeController::class, 'index'])->name('welcome');
Route::get("/destaques", [SliderController::class, 'index'])->name('slider');