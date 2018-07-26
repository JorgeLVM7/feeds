<?php

namespace App\Http\Controllers;
use App\Categorias;
use App\Restaurantes;
use App\User;
use DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $categorias = Categorias::orderBy('id','DESC')
            ->paginate();


        $usuarios = DB::table( 'users as u')
            ->join('roles as r','u.roles_id_rol','=','r.id')
            ->select('u.id','u.name','u.email','u.path','r.roles as role')
            ->orderBy('id','DESC')
            ->paginate();


        $restaurantes = DB::table( 'restaurantes as r')
        ->join('users as u','r.user_id','=','u.id')
        ->select('r.id','r.nombre','r.telefono','r.horario','r.hora1','r.hora2','r.path','u.name as usuario')
        ->orderBy('id','DESC')
        ->paginate();


        return view('cPanel.admin.index',compact('categorias','usuarios', 'restaurantes'));
    }
}
