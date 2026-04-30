<?php
 
namespace App\Http\Controllers;
 
use App\Models\Categoria;
use App\Models\Produto;
 
use Illuminate\Http\Request;
 
class CardapioController extends Controller
{
    public function cardapio()
    {
        $filtroCategoria = Categoria::where('status_categoria', 'ATIVO')
        ->orderBy('ordem_categoria')
        ->get();
 
        //dd($filtroCategoria);
        $listaProduto = Produto::with('CategoriaProduto')
        ->where('status_produto', 'ATIVO')
         ->orderBy('ordem_produto')
         ->get();
 
        return view('site.cardapio.cardapio');

        //, compact($filtroCategoria, $listaProduto));
    }
}