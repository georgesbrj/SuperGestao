<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request){
       
        //dd($request);

        //1 forma de salvar dados 
       /*  $contato = new SiteContato();          
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');
        $contato->save(); */

        //segunda forma de salvar dados
        //$contato = new SiteContato();
        //$contato->fill($request->all());        
        //$contato->save();
         //print_r($contato->getAttributes());


         
         $motivo_contatos = MotivoContato::all();
       

       return view('site.contato',["titulo" => "Contato",'motivo_contatos' => $motivo_contatos ]);
    }



    public function salvar(Request $request){
          

        dd($request);

        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:200',
        ]);
         //SiteContato::create($request->all());
         
    }
}
