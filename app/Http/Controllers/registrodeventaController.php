<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrodeventaController extends Controller
{
    public function registros(){
        return view('ventas.registrodeventa');
    }
}
