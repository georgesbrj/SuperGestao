<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{

    //
    use SoftDeletes;

    //para renomear a tabela insira o comando abaixo 
    protected  $table = 'fornecedores';

    //para usar o metodo create do tink insira o comando abaixo
    protected $fillable = ['nome','site','uf','email'];


}
