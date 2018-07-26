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
        $restaurantes = Restaurantes::orderBy('id','DESC')->paginate(4);

//        Promociones
        $promociones = Promocion::orderBy('id','DESC')->paginate(4);

//        Eventos
        $eventos = Restaurantes::orderBy('id','DESC')->paginate(25);


        return view ('view',compact('restaurantes', 'promociones','eventos'));
    }
}
