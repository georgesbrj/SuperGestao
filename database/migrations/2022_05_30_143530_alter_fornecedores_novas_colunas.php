<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedoresNovasColunas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //adicionando novas colunas a tabelas que foram criadas
        //para alterar uma tabela rode o comando php artisan make:migration alter_fornecedores_novas_colunas
        //repare que  foi colocado um novo nove na migration
        // depois disso esse arquivo aqui e criado .
        //cria as novas colunas abaixo (somenmte novas )
        //repare que no objeto eschema agora e table
        // depois rode o comando php artisan migrate .. pronto as novas colunas irao aparecer na tabela
        
        Schema::table('fornecedores', function (Blueprint $table) {            
            $table->string('uf',2);
            $table->string('email',150);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //para remover colunas da tabela 
        //para reverter as migracoes php artisan migrate:rollback
        // para remover atravez de passo use o comando  php artisan migrate:rollback --step=numero de passos 
        //caso tudo de errado de o comando php artisan migrate:reset depois  php artisan migrate:fresh
        Schema::table('fornecedores', function (Blueprint $table) {            
          //  $table->dropColumn('uf');
          //$table->dropColumn(['uf','email']);
            
        });
    }
}
