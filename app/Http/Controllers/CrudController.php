<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //Para llamra las librerias que nos permiten las diferenest funcionalidades

class CrudController extends Controller
{
    public function index(){
        $datos=DB::select('select * from productos ');
        return view("welcome");
    }
}
