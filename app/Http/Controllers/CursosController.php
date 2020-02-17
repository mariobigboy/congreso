<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disertante;

class CursosController extends Controller
{
    //
    public function index(){
    	return view('cursos.index');
    }

    public function create(){
    	$disertantes = Disertante::all();
    	return view('cursos.create')->with('disertantes', $disertantes);
    }
}
