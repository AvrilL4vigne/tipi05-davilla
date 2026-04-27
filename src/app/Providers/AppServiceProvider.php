<?php

namespace App\Providers;

use Iluminate\Support\Facades\Views;
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

          
            $categorias = Categoria ::orderBy('nome_categoria')-> get();

            var_dump($categorias);

            $view->with('categorias', $categorias);

        });

    }
}



      