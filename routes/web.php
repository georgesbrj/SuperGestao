<?php

use Illuminate\Support\Facades\Route;



 
Route::get('/','PrincipalController@principal')->name('site.index');
Route::get('/sobre', 'SobreController@sobre')->name('site.sobre');
Route::get('/contato', 'ContatoController@contato')->name('site.contato'); 
Route::post('/contato', 'ContatoController@salvar')->name('site.contato'); 
Route::get('/login/{erro?}', 'LoginController@index')->name('site.login');
Route::post('/login', 'LoginController@autenticar')->name('site.login');



Route::middleware('autenticacao:padrao,visitante')->prefix('/app')->group(function(){
    Route::get('/home','HomeController@index')->name('app.home'); 
    Route::get('/sair','LoginController@sair')->name('app.sair'); 
    Route::get('/cliente', 'ClienteController@index')->name('app.cliente');
    Route::get('/fornecedor', 'FornecedorController@index')->name('app.fornecedor');
    Route::get('/fornecedor/listar', 'FornecedorController@listar')->name('app.fornecedor.listar');
    Route::post('/fornecedor/listar', 'FornecedorController@listar')->name('app.fornecedor.listar');
    Route::get('/fornecedor/adicionar', 'FornecedorController@adicionar')->name('app.fornecedor.adicionar');
    Route::post('/fornecedor/adicionar', 'FornecedorController@adicionar')->name('app.fornecedor.adicionar');
    Route::get('/fornecedor/editar/{id}/{msg?}','FornecedorController@editar')->name('app.fornecedor.editar');
    Route::get('/fornecedor/excluir/{id}','FornecedorController@excluir')->name('app.fornecedor.excluir');
   
    //rotas resources
    Route::resource('produto','ProdutoController');
    
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