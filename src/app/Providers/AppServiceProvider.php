<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Categoria;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        View::composer('partials.header', function ($view) {

          
            $listaCategorias = Categoria::orderBy('nome_categoria')-> get();

            //dd($categorias);
            //var_dump($categorias);

            $view->with('lista', $listaCategorias);

        });

    }
}



      