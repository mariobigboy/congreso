<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;


class PostController extends Controller
{
    public function index($id){

    	//obtendremos las noticias:
    	$noticia = Noticia::where('id', $id)->first();
    	$comentarios = [];
    	return view('post')->with(['noticia' => $noticia, '' => $comentarios]);
    }
}
