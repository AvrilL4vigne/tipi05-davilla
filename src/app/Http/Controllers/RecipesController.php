<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function recipes()
    {
        return view('site.home.recipes');
    }
}