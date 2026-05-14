<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
{
    // Alterado para plural para combinar com o compact
    $categorias = Categoria::orderBy('ordem_categoria')->get();
    dd($categorias);
    return view('admin.categoria.index', compact('categorias'));
}
}
