<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Restaurantes;
use Illuminate\Http\Request;
use App\Http\Requests\EventoRequest;
use Auth;

class EventoController extends Controller
{
    public function index()
    {
      $evento = Evento::orderBy('id','DESC')
        ->where('user_id', auth()->user()->id)
        ->paginate();

      return view('cPanel.evento.index',compact('evento'));
    }
    public function show($id)
    {
        $evento = Evento::find($id);
        return view('cPanel.evento.show', compact('evento'));
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
        $evento->user_id = $request->user_id;
        $evento->rest_id = $request->rest_id;
        $evento->save();
        return redirect()-> route('evento.index')
        ->with('info','El evento fue guardado correctamente');
    }
    public function create()
    {
        $restaurantes = Restaurantes::all()
            ->where('user_id', auth()->user()->id);
        return view('cPanel.evento.create',compact('restaurantes'));
    }
    public function update(EventoRequest $request, $id)
    {
        $evento = Evento::find($id);

        $evento->nombre = $request->nombre;
        $evento->descripcion =$request->descripcion;
        $evento->fecha = $request->fecha;
        $evento->hora_inicio = $request->hora_inicio;
        $evento->hora_final = $request->hora_final;
        $evento->path = $request->path;
        $evento->user_id = $request->user_id;
        $evento->rest_id = $request->rest_id;
        $evento->save();

        return redirect()-> route('cPanel.evento.index')
            ->with('info','El evento fue actualizado correctamente');
    }
    public function destroy($id)
    {
        $evento = Evento::find($id);
        $evento ->delete();
        return back()->with('info','El evento fue eliminado correctamente');
    }
    public function edit($id)
    {
        $restaurantes = Restaurantes::all()
            ->where('user_id', auth()->user()->id);
        $evento = Evento::find($id);
        return view('cPanel.evento.edit', compact('evento','restaurantes'));
    }
}
