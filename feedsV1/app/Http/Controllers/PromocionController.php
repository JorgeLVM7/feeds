<?php

namespace App\Http\Controllers;
use App\Promocion;
use App\Restaurantes;
use Illuminate\Http\Request;
use App\Http\Requests\PromocionRequest;
use Auth;



class PromocionController extends Controller
{
    public function index()
    {
        $promocion = Promocion::orderBy('id','DESC')
            ->where('user_id', auth()->user()->id)
            ->paginate();

        return view('cPanel.promocion.index',compact('promocion'));
    }
    public function show($id)
    {
        $promocion = Promocion::find($id);
        return view('cPanel.promocion.show', compact('promocion'));
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
        $promocion->user_id = $request->user_id;
        $promocion->rest_id = $request->rest_id;
        $promocion->save();
        return redirect()-> route('promocion.index')
        ->with('info','La promocion fue guardado correctamente');
    }
    public function create()
    {
        $restaurantes = Restaurantes::all()
            ->where('user_id', auth()->user()->id);
        return view('cPanel.promocion.create',compact('restaurantes'));
    }
    public function update(PromocionRequest $request, $id)
    {
        $promocion = Promocion::find($id);

        $promocion->nombre = $request->nombre;
        $promocion->descripcion =$request->descripcion;
        $promocion->fecha = $request->fecha;
        $promocion->hora_inicio = $request->hora_inicio;
        $promocion->hora_final = $request->hora_final;
        $promocion->path = $request->path;
        $promocion->user_id = $request->user_id;
        $promocion->rest_id = $request->rest_id;
        $promocion->save();
        return redirect()-> route('promocion.index')
        ->with('info','La promocion fue actualizada correctamente');
    }
    public function destroy(Request $request)
    {
        $promocion = Promocion::findOrFail($request->id);
        $promocion ->delete();
        return back()->with('info','La promoción fue eliminada correctamente');
    }
    public function edit($id)
    {
        $promocion = Promocion::find($id);
        return view('cPanel.promocion.edit', compact('promocion'));
    }
}
