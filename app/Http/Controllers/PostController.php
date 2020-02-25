<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use App\Comentario;

class PostController extends Controller
{
    public function index($id){

    	//obtendremos las noticias:
    	$noticia = Noticia::where('id', $id)->first(); //Noticia
    	//comentarios de esta noticia:
    	$comentarios = Comentario::where('noticia_id', $id)->get(); //collection
    	//ultimas 4 noticias:
    	$noticias = Noticia::all()->take(4);
    	return view('post')->with([
    		'noticia' => $noticia, 
    		'comentarios' => $comentarios,
    		'noticias' => $noticias
    	]);
    }
}
