<?php

namespace App\Http\Controllers;
use App\Restaurantes;
use Illuminate\Http\Request;

class RestauranteController extends Controller
{
    public function index()
    {
        # code...
    }
    public function show()
    {
        # code...
    }
    public function store()
    {
        $restaurante = new Restaurante;
        $restaurante->nombre = $request->nombre;
        $restaurante->descripcion = $request->descripcion;
        $restaurante->sitio_web = $request->sitio_web;
        $restaurante->categoria = $request->categoria;
        $restaurante->email = $request->email;
        $restaurante->calle = $request->calle;
        $restaurante->no_int = $request->no_int;
        $restaurante->no_ext = $request->no_ext;
        $restaurante->colonia = $request->colonia;
        $restaurante->codigo_postal = $request->codigo_postal;
        $restaurante->referencia = $request->referencia;
        $restaurante->telefono = $request->telefono;
        $restaurante->horario = $request->horario;
        $restaurante->save();
        return redirect()-> route('restaurante.index')
        ->with('info','El restaurante fue guardado correctamente');
    }
    public function create()
    {
        return view('restaurante.create');
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



