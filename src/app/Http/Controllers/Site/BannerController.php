<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Categoria; 
use App\Models\Produto;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    public function index()
    {
        // 1. Busca os Banners
        $banners = Banner::where('status_banner', 'ATIVO')
            ->orderBy('ordem_banner', 'asc')
            ->get();

        $filtroCategoria = Categoria::all();

        $listaProduto = Produto::all();

        return view('site.home.home', compact('banners', 'filtroCategoria', 'listaProduto'));
    }
}