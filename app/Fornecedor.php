<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    //para renomear a tabela insira o comando abaixo 
    protected  $table = 'fornecedores';

    //para usar o metodo create do tink insira o comando abaixo
    protected $fillable = ['nome','site','uf','email'];


}
