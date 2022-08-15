<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$metodo_autenticacao,$perfil)
    {

         session_start();

     // echo $metodo_autenticacao.'-'.$perfil."<br />";

       if($metodo_autenticacao == 'padrao'){
         //echo "verificar usuario e senha"."<br />";
       }

       if($metodo_autenticacao == 'ldap'){
        // echo "verificar usuario no ad"."<br />";
       }

        if(true){
          return $next($request);
        }else{
            return Response("Acesso negado rota exige autenticação");
        }

    }
}
