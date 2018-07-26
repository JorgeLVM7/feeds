<?php

namespace App\Http\Controllers;
use App\Categorias;
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
            ->paginate(5);

        return view('cPanel.admin.index',compact('categorias','usuarios'));
    }
}
