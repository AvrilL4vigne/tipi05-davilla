<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // O caminho é: partials > site > home
    return view('partials.site.home'); 
    
});

