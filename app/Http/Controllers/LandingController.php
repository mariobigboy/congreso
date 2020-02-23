<?php

namespace App\Http\Controllers;

use App\Noticia;
use App\Disertante;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    //

    public function index(){

    	
    	$disertantes = Disertante::all();
    	$noticias = Noticia::all();

    	return view('landing')->with(['disertantes' => $disertantes, 'noticias' => $noticias]);
    }
}
