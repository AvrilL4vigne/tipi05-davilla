<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    // Define o nome exato da tabela no banco de dados
    protected $table = 'tbl_banner';

    // Define a chave primária (conforme vimos no seu MySQL Workbench)
    protected $primaryKey = 'id_banner';

    // Se você não tiver as colunas created_at e updated_at, mude para false
    public $timestamps = false;

    // Colunas que podem ser preenchidas em massa (Mass Assignment)
    protected $fillable = [
        'nome_banner',
        'titulo_banner',
        'subtitulo_banner',
        'descricao_banner',
        'texto_botao_banner',
        'link_botao_banner',
        'ordem_banner',
        'foto_banner',
        'status_banner'
    ];
}