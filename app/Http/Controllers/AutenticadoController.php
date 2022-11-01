<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class AutenticadoController extends Controller
{
    public function index(){
        $usuarios = User::all();
        return view('home',['usuarios' => $usuarios]);
    }
}
