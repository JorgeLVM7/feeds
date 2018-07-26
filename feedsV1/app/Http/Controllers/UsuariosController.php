<?php

namespace App\Http\Controllers;

use App\User;
use App\Roles;
use App\Http\Requests\UsuariosRequest;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = User::orderBy('id','DESC')
        ->paginate();

      return view('cPanel.usuarios.index',compact('usuarios'));
    }

    public function create()
    {
        $roles = Roles::all();
        return view('cPanel.usuarios.create',compact('roles'));
    }

    public function store(CategoriasRequest $request)
    {
        $usuarios = new User;
        $usuarios->name = $request->name;
        $usuarios->email = $request->email;
        $usuarios->password=bcrypt($request->password);
        $usuarios->path = $request->path;
        $usuarios->roles_id_rol = $request->roles_id_rol;
        $usuarios->save();
        return redirect()-> route('admin.index')
        ->with('info','El usuario fue guardado correctamente');
    }

    public function update(CategoriasRequest $request, $id)
    {
        $usuarios = User::find($id);

        $usuarios->name = $request->name;
        $usuarios->email = $request->email;
        $usuarios->path = $request->path;
        $usuarios->roles_id_rol = $request->roles_id_rol;
        $usuarios->save();

        return redirect()-> route('cPanel.admin.index')
            ->with('info','El usuario fue actualizado correctamente');
    }
    public function destroy($id)
    {
        $usuarios = User::find($id);
        $usuarios ->delete();
        return back()->with('info','El usuario fue eliminado correctamente');
    }
    public function edit($id)
    {

        $roles = Roles::all();
        $usuarios = User::find($id);
        return view('cPanel.usuarios.edit', compact('usuarios','roles'));
    }
}
