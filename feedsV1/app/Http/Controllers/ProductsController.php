<?php

namespace App\Http\Controllers;
use App\Promocion;
use App\Evento;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {

        $promociones = Promocion::orderBy('id', 'DESC')->paginate();

        $eventos = Evento::orderBy('id', 'DESC')->paginate();


        return view('cPanel.products.index',compact('promociones','eventos'));
    }
}
