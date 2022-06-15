<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome'=>'Fornecedor 1',
            'status'=>'S',
            'cnpj'=>'111111111111',
            ],
            1 => [ 
                'nome'=>'Fornecedor 2',
            'status'=>'N',
              ],
            2=> [
                'nome'=>'Fornecedor 3',
            'status'=>'N',
            'cnpj'=>'111111111111',
            ]


            ];    
       
        $total = count($fornecedores);

        $msg = isset($fornecedores['cnpj']) ? 'CNPJ informado' : 'CNPJ nao informado';

        echo $msg;

        return view('app.fornecedor.index',compact('fornecedores','total'));
    }
}
