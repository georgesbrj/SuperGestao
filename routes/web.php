<?php

use Illuminate\Support\Facades\Route;

 
Route::get('/','PrincipalController@principal')->name('site.index');
Route::get('/sobre', 'SobreController@sobre')->name('site.sobre');
Route::get('/contato', 'ContatoController@contato')->name('site.contato'); 
Route::post('/contato', 'ContatoController@contato')->name('site.contato'); 
Route::get('/login', function(){return 'Login';})->name('site.login');



Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return 'clientes';})->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function(){return 'produtos';})->name('app.produtos');
});


Route::get('/teste/{p1}/{p2}','TesteController@teste')->name('teste');




 Route::fallback(function(){
    echo 'A rota nao existe <a href="'.route('site.index').'">clique aqui</a> para voltar a pagina inicial  ' ;
 });



 
 /* Route::get('/rota2',function(){
 return redirect()->route('site.rota1');
})->name('site.rota2');
   */

 //Route::redirect('/rota2','/rota1');



/* //nome/categoria/assunto/mensagem 
Route::get('/contato/{nome}/{categoria_id}',function(
    string $nome = 'Desconhecido',
    int $categoria_id = 1
    ){
    echo "estamos aqui ".$nome.' '.$categoria_id;
})->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+'); */