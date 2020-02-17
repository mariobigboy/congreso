<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class LandingController extends Controller
{
    //

    public function index(){

    	$cursos = Curso::all();

    	return view('landing')->with('cursos', $cursos);
    }
}
