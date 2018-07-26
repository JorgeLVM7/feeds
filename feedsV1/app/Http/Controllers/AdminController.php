<?php

namespace App\Http\Controllers;
use App\Categorias;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $categorias = Categorias::orderBy('id','DESC')
            ->paginate();

        return view('cPanel.admin.index',compact('categorias'));
    }
}
