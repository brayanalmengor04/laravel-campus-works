<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorkController;

Route::get('/', function () {
    return view('welcome');
}); 

// Creamos las rutas por ejemplo http://localhost: 8000 /saludo
Route::get('/saludo',[HelloWorkController::class,'holaMundo'])->name('datos'); 
Route::get("/producto",[HelloWorkController::class,'funproducto'])->name('producto');

