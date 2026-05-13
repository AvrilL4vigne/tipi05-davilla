<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function recipes()
    {
        return view('site.home.recipes');
    }
}