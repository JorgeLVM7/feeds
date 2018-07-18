<?php

namespace App\Http\Controllers;
use App\Restaurantes;
use App\Promocion;
use App\Evento;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
//        Restaurantes
        $restaurantes = Restaurantes::orderBy('id','DESC')->paginate(25);

//        Promociones
        $promociones = Restaurantes::orderBy('id','DESC')->paginate(25);

//        Eventos
        $eventos = Restaurantes::orderBy('id','DESC')->paginate(25);

        return view('index',compact('restaurantes','promociones', 'eventos'));

    }

    public function show()
    {

    }
}
