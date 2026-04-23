<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    // Verifique se o nome da função é 'index' ou o que você definiu no web.php
    public function index()
    {
        // O caminho aponta para: site > home > pricing > pricing.blade.php
        return view('site.home.pricing.pricing');
    }
}