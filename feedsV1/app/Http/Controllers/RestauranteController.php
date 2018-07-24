<?php

namespace App\Http\Controllers;
use App\Restaurantes;
use App\Categorias;
use Illuminate\Http\Request;
use App\Http\Requests\RestaurantesRequest;
use Auth;




class RestauranteController extends Controller
{
    public function index(Request $request)
    {

        $restaurantes = Restaurantes::orderBy('id','DESC')
            ->where('user_id', auth()->user()->id)
            ->paginate();

        return view('cPanel.restaurantes.index',compact('restaurantes'));
    }
    public function show(Request $request, $id)
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
        $restaurante->idcategoria1 = $request->idcategoria1;
        $restaurante->idcategoria2 = $request->idcategoria2;
        $restaurante->idcategoria3 = $request->idcategoria3;
        $restaurante->email = $request->email;
        $restaurante->calle = $request->calle;
        $restaurante->no_int = $request->no_int;
        $restaurante->no_ext = $request->no_ext;
        $restaurante->colonia = $request->colonia;
        $restaurante->codigo_postal = $request->codigo_postal;
        $restaurante->referencia = $request->referencia;
        $restaurante->telefono = $request->telefono;
        $restaurante->RFC = $request->RFC;

        $horarios = implode(',',$_POST['horario']);



        $restaurante -> horario = $horarios;

//        $restaurante->horario = $request->horario;
        $restaurante->hora1 = $request->hora1;
        $restaurante->hora2 = $request->hora2;
        $restaurante->latitud = $request->latitud;
        $restaurante->longitud = $request->longitud;
        $restaurante->path = $request->path;
        $restaurante->user_id = $request->user_id;
        $restaurante->save();
        return redirect()-> route('restaurantes.index')
        ->with('info','El restaurante fue guardado correctamente');
    }
    public function create() 
    {
        $categorias = Categorias::all();
        return view('cPanel.restaurantes.create', compact('categorias'));
    }
    public function update(RestaurantesRequest $request, $id)
    {
        $restaurante = Restaurantes::find($id);

        $restaurante->nombre = $request->nombre;
        $restaurante->descripcion =$request->descripcion;
        $restaurante->sitio_web = $request->sitio_web;
        $restaurante->idcategoria1 = $request->idcategoria1;
        $restaurante->idcategoria2 = $request->idcategoria2;
        $restaurante->idcategoria3 = $request->idcategoria3;
        $restaurante->email = $request->email;
        $restaurante->calle = $request->calle;
        $restaurante->no_int = $request->no_int;
        $restaurante->no_ext = $request->no_ext;
        $restaurante->colonia = $request->colonia;
        $restaurante->codigo_postal = $request->codigo_postal;
        $restaurante->referencia = $request->referencia;
        $restaurante->telefono = $request->telefono;
        $restaurante->RFC = $request->RFC;

        $horarios = implode(',',$_POST['horario']);


        $restaurante -> horario = $horarios;

       
        $restaurante->hora1 = $request->hora1;
        $restaurante->hora2 = $request->hora2;
        $restaurante->latitud = $request->latitud;
        $restaurante->longitud = $request->longitud;
        $restaurante->path = $request->path;
        $restaurante->user_id = $request->user_id;


        $restaurante->save();
        return redirect()-> route('restaurantes.index')
            ->with('info','El restaurante fue actualizado correctamente');
    }
    public function destroy($id)
    {
        $restaurante = Restaurantes::find($id);
        $restaurante ->delete();
        return back()->with('info','El restaurante fue eliminado correctamente');
    }
    public function edit($id)
    {
        $categorias = Categorias::all();
        $restaurante = Restaurantes::find($id);
        return view('cPanel.restaurantes.edit', compact('restaurante','categorias'));
    }
}



