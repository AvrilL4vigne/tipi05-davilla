<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

// Rota para a Home
Route::get("/", [HomeController::class, 'home'])->name('home');

// Rota para o Sobre
Route::get("/sobre", [SobreController::class, 'sobre'])->name('sobre');

// Rota para Serviços > name > simplifica o arquivo em um nome basico para ser chamado em qualquer sessao 
Route::get("/services", [ServicesController::class, 'services'])->name('services');