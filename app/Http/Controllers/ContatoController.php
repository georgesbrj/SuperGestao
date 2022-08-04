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
          

        //dd($request);


        $regras = [
            'nome' => 'required|min:3|max:40|unique:site_contatos',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:200',
        ];

        $feedBack = [
            'nome.required' => 'O campo nome precisa ser preenchido',
            'nome.min' => 'O campo nome precisa ter no minimo  3 caracteres',
            'nome.max' => 'O campo nome precisa ter no maximo 40 caracteres',
            'nome.unique' => 'O nome informado ja esta cadastrado',
            'telefone.required' => 'O campo telefone precisa ser preenchido',
            'email.email' => 'O  email informado não e valido',
            'motivo_contatos_id.required' => 'O campo motivo contato precisa ser preenchido',
            'mensagem.required' => 'O campo mensagem precisa ser preenchido',
           
              'required' => 'O campo :attribute deve ser preenchido',
        ];

        $request->validate($regras,$feedBack);
         
        
        //persistencia na tabela 
        SiteContato::create($request->all());

        return redirect()->route('site.index');
         
    }
}
