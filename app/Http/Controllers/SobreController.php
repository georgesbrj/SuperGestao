<?php

namespace App\Http\Controllers;

class SobreController extends Controller
{
  
   /*  public function __construct()
   {
      $this->middleware('log.acesso');
   } */

   public function sobre(){
      return view('site.sobre');
   }
}
