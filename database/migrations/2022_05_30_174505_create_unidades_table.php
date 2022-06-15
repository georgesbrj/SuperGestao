<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidades',5);
            $table->string('descricao',100);
            $table->timestamps();

          });

          //criando uma nova coluna na tabela produtos chamada de unidade_id e criando uma chave estrangeira 
          Schema::table('produtos',function(Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
          });
         
           //criando uma nova coluna na tabela produto_detalhes chamada de unidade_id e criando uma chave estrangeira 
          Schema::table('produto_detalhes',function(Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
          });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        //removendo chave estragenira da tabela produtos
        Schema::table('produtos',function(Blueprint $table){
            
            //remover a fk 
            $table->dropForeign('produtos_unidade_id_foreign'); 

            //remover a coluna
            $table->dropColumn('unidade_id'); 
            
          });




        //removendo chave estragenira da tabela produto_detalhes
        Schema::table('produto_detalhes',function(Blueprint $table){
            
            //remover a fk 
            $table->dropForeign('produto_detalhes_unidade_id_foreign'); 

            //remover a coluna
            $table->dropColumn('unidade_id'); 
            
          });


        Schema::dropIfExists('unidades');
    }
}
