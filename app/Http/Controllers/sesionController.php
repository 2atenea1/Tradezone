<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sesionController extends Controller
{

     public function iniciar(){
      return view('inicio.sesion');
    }


}
