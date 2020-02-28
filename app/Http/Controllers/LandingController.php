<?php

namespace App\Http\Controllers;

use App\Noticia;
use App\Disertante;
use App\Curso;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    //

    public function index(){

    	$cursos = Curso::all();
        $cursos = $cursos->shuffle();
    	$disertantes = Disertante::where('destacado', 1)->get();
    	$noticias = Noticia::all();

    	return view('landing')->with([
    		'disertantes' => $disertantes, 
    		'noticias' => $noticias,
    		'cursos' => $cursos
    	]);
    }
}
