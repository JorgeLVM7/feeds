<?php

namespace App\Http\Controllers;
use App\Promocion;
use Illuminate\Http\Request;
use App\Http\Requests\PromocionRequest;



class PromocionController extends Controller
{
    public function index()
    {
        $promocion = Promocion::orderBy('id','DESC')
        ->paginate();

        return view('cPanel.promocion.index',compact('promocion'));
    }
    public function show($id)
    {
      # code...
    }
    public function store(PromocionRequest $request)
    {
        $promocion = new Promocion;
        $promocion->nombre = $request->nombre;
        $promocion->descripcion =$request->descripcion;
        $promocion->fecha = $request->fecha;
        $promocion->hora_inicio = $request->hora_inicio;
        $promocion->hora_final = $request->hora_final;
        $promocion->path = $request->path;
        $promocion->save();
        return redirect()-> route('promocion.index')
        ->with('info','La promocion fue guardado correctamente');
    }
    public function create()
    {
        return view('cPanel.promocion.create');
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
