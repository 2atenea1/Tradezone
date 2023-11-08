<?php

use App\Http\Controllers\catalogoController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\intercambiosController;
use App\Http\Controllers\pqrsController;
use App\Http\Controllers\registroController;
use App\Http\Controllers\registrodeventaController;
use App\Http\Controllers\registroventasController;
use App\Http\Controllers\sesionController;
use App\Http\Controllers\venderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registrosventas',function(){
    return view ('registrosventas');
});

Route::get('/inicio',function(){
    return  view ('inicio');
});
Route::get('/iniciarsesion',function(){
    return  view ('iniciarsesion');
});
Route::get('/pqrss',function(){
    return  view ('pqrss');
});
Route::get('/intercambioss',function(){
    return  view ('intercambioss');
});
Route::get('/vender',function(){
    return  view ('vender');
});
Route::get('/catalogo',function(){
    return  view ('catologo');
});

Route::get('/registrosventas',[registrodeventaController::class,'registros']);
Route::get('/inicio',[homeController::class,'home']);
Route::get('/iniciarsesion',[sesionController::class,'iniciar']);
Route::get('/pqrss',[pqrsController::class,'pqs']);
Route::get('/intercambioss',[intercambiosController::class,'interaccion']);
Route::get('/vender',[venderController::class,'vn']);
Route::get('/catalogo',[catalogoController::class,'cata']);
