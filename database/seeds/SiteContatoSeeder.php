<?php

use App\SiteContato;
use Illuminate\Database\Seeder;
 

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //1 forma de criar registro 
         /* $fornecedor = new SiteContato();
         $fornecedor->nome = 'George bezerra';
         $fornecedor->telefone = '964090765';         
         $fornecedor->email = 'george_463@hotmail.com';
         $fornecedor->motivo_contato = 1;
         $fornecedor->mensagem = 'greve';
         $fornecedor->save(); */

         //aqui esta sendo usado uma factory
         factory(SiteContato::class,50)->create();
    }
}
