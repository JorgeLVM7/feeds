<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;
use App\Http\Requests\EventoRequest;

class EventoController extends Controller
{
    public function index()
    {
      $evento = Evento::orderBy('id','DESC');
    }
    public function show($id)
    {
      # code...
    }
    public function store(EventoRequest $request)
    {
        $evento = new Evento;
        $evento->nombre = $request->nombre;
        $evento->descripcion =$request->descripcion;
        $evento->fecha = $request->fecha;
        $evento->hora_inicio = $request->hora_inicio;
        $evento->hora_final = $request->hora_final;
        $evento->path = $request->path;
        $evento->save();
        return redirect()-> route('evento.index')
        ->with('info','El evento fue guardado correctamente');
    }
    public function create()
    {
        return view('cPanel.evento.create');
    }
    public function update()
    {
        # code...
    }
    public function destroy()
    {
        # code...
    }
    public function edit()
    {
        # code...
    }
}
