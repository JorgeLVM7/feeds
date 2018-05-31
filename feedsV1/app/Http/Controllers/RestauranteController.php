<?php

namespace App\Http\Controllers;
use App\Restaurantes;
use Illuminate\Http\Request;
use App\Http\Requests\RestaurantesRequest;



class RestauranteController extends Controller
{
    public function index()
    {
        $restaurantes = Restaurantes::orderBy('id','DESC')
        ->paginate();

        return view('cPanel.restaurantes.index',compact('restaurantes'));
    }
    public function show($id)
    {
        $restaurante = Restaurantes::find($id);
        return view('cPanel.restaurantes.show', compact('restaurante'));
    }
    public function store(RestaurantesRequest $request)
    {
        $restaurante = new Restaurantes;
        $restaurante->nombre = $request->nombre;
        $restaurante->descripcion =$request->descripcion;
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
        $restaurante->RFC = $request->RFC;
        $restaurante->horario = $request->horario;
        $restaurante->longitud = 'AM';
        $restaurante->latitud = 'AM';
        $restaurante->path = $request->path;
        $restaurante->users_id_user = '1';
//        $restaurante->foto = $request->foto;
        $restaurante->save();
        return redirect()-> route('restaurantes.index')
        ->with('info','El restaurante fue guardado correctamente');
    }
    public function create()
    {
        return view('cPanel.restaurantes.create');
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



