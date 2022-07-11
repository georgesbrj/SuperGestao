<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //1 forma de criar registro 
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'fornecedor100.com.br';
        $fornecedor->uf = 'CE';
        $fornecedor->email = 'contato@fornecedor100.com.br';
        $fornecedor->save();


        //2 forma de criar registro (atencao para o metodo fillabel da classe)
        Fornecedor::create([
           'nome' => 'Fornecedor  200',
           'site' => 'fornecedor200.com.br',
           'uf' => 'RJ',
           'email' => 'contato@fornecedor200.com.br'
        ]);

    }
}
