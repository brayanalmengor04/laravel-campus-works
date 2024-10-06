<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HelloWorkController extends Controller{public function holaMundo(){
        $data = ['mensaje' => 'Hola desde el controlador!','valores' => 1240912849120];
        return view('holamundo', $data);
    }  
    // Prueba con vista en folder
    public function funproducto(){
        return view("producto.index");
    }
}
