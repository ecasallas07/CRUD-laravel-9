<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //Para llamra las librerias que nos permiten las diferenest funcionalidades

class CrudController extends Controller
{
    public function index(){
        $datos=DB::select('select * from pedidos');
        return view("welcome")->with("datos",$datos); //enviar a la vista la variable de los datos 
    }
}
