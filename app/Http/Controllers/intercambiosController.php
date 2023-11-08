<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class intercambiosController extends Controller
{
    public function interaccion(){
        return view('intercambios.inter');
    }
}
