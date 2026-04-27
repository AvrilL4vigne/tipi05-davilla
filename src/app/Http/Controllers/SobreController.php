<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreController extends Controller
{
    public function sobre()
    {
        // Por enquanto, vamos apontar para a view da home ou 
        // para a view específica se você já a tiver criado
        return view('site.sobre.sobre'); 
    }
}