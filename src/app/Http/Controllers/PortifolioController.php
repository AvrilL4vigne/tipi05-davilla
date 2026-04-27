<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortifolioController extends Controller
{
    public function portfolio()
    {
        return view('site.home.portiflio'); // Nome conforme sua pasta de views
    }
}