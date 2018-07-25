<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

 


class ConfigController extends Controller
{
    public function index()
    {
        
        $configuracion = Auth::user();

        return view('cPanel.config.index',compact('configuracion'));
    }

    public function edit($id)
    {
        $configuracion = User::find($id);
        return view('cPanel.config.edit')->with('configuracion', $configuracion);
    }
    public function update(Request $request, $id){
        $configuracion = User::find($id);
        $configuracion->name = $request->name;
        $configuracion->email = $request->email;
        $configuracion->path = $request->path;
        
        $configuracion->save();

        return redirect()-> route('config.index')
            ->with('info','Tú perdil fue actualizado correctamente');
    }
}
