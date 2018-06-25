<?php

namespace App\Http\Controllers;
use App\Promocion;
use App\Evento;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $promociones = Promocion::orderBy('id', 'DESC')->paginate();

        $eventos = Evento::orderBy('id', 'DESC')->paginate();


        return view('cPanel.products.index',compact('promociones','eventos'));
    }
}
