<?php

namespace App\Http\Controllers;

use App\Restaurantes;
use App\Categorias;
use Illuminate\Http\Request;

class MapaController extends Controller
{   
    public function index()
    {   
        $categorias = Categorias::all();

        $locations = Restaurantes::select('nombre','latitud','longitud')->get();

        return view('layouts.mapa',compact('locations','categorias'));
    }
}
