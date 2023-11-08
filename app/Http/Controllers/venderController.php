<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class venderController extends Controller
{
    public function vn(){
        return view('ventas.vender');
    }
}
