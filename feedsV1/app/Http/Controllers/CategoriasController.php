<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\Http\Requests\CategoriasRequest;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index()
    {
      $categorias = Categorias::orderBy('id','DESC')
        ->paginate();

      return view('cPanel.categorias.index',compact('categorias'));
    }
    public function show()
    {
      //
    }
    public function store(CategoriasRequest $request)
    {
        $categorias = new Categorias;
        $categorias->categoria = $request->categoria;
        $categorias->save();
        return redirect()-> route('categorias.index')
        ->with('info','La categoría fue guardado correctamente');
    }
    public function create()
    {
        return view('cPanel.categorias.create');
    }
    public function update(CategoriasRequest $request, $id)
    {
        $categorias = categorias::find($id);

        $categorias->categoria = $request->categoria;
        $categorias->save();

        return redirect()-> route('cPanel.categorias.index')
            ->with('info','La categoría fue actualizada correctamente');
    }
    public function destroy($id)
    {
        $categorias = Categorias::find($id);
        $categorias ->delete();
        return back()->with('info','La categoría fue eliminada correctamente');
    }
    public function edit($id)
    {
        $categorias = Categorias::find($id);
        return view('cPanel.categorias.edit', compact('categorias'));
    }
}
