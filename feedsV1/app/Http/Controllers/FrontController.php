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
        $restaurantes = Restaurantes::orderBy('id','DESC')->paginate(4);

//        Promociones
        $promociones = Promocion::orderBy('id','DESC')->paginate(4);

//        Eventos
        $eventos = Restaurantes::orderBy('id','DESC')->paginate(25);

        return view('welcome',compact('restaurantes','promociones', 'eventos'));

    }

    public function show($id)
    {
        //        Restaurantes
        $restaurante = Restaurantes::find($id);

//        Promociones
        $promociones = Promocion::find($id);

//        Eventos
        $eventos = Evento::find($id);


        return view ('home.show',compact('restaurante', 'promociones','eventos'));
    }
}
