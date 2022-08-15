<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
 
class LoginController extends Controller
{
    public function index(Request $request){  
        
        
        $erro = '';
        
        if($request->get('erro') == 1 ){
           $erro = "Usuário e senha não existe";
        }


        return view('site.login',['titulo' => 'Login','erro'=>$erro]);
    }


    public function autenticar(Request $request){
        $regras = [
            'usuario' => 'email',
            'senha' => 'required',
        ];


        $feedBack = [
            'usuario.email' => 'O campo usuário (e-mail) é obrigatório',
            'senha.required' => 'O campo senha é obrigatório'
        ];

        $request->validate($regras,$feedBack);


        $email = $request->get('usuario');
        $password = $request->get('senha');

       // echo "{$email} {$password}";

       $user = new User();


       $usuario = $user->where('email',$email)
                      ->where('password',$password)
                      ->get()->first();

                                    
       /* echo '<pre>';               
       print_r($usuario);
       echo '</pre>'; */ 

       if(isset($usuario->name)){
        session_start();
        $_SESSION['nome'] = $usuario->name;
        $_SESSION['email'] = $usuario->email;
        
        return redirect()->route('app.home');

       }else{
          return redirect()->route('site.login',['error' => 1]);
       }

    }


    public function sair(){

        // dd($_SESSION);
        session_destroy();
        return redirect()->route('site.index');
    }
}
