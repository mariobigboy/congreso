<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disertante;

class DisertantesController extends Controller
{
    public function index(){
    	//disertantes:
    	/*$model_disertantes = Role::where('nombre', 'disertante')->first();
    	$disertantes = $model_disertantes->users;*/
        $disertantes = Disertante::select('disertante.*','persona.*')->join('persona', 'disertante.persona_id', '=', 'persona.id')->get();
    	return view('disertantes.index')->with('disertantes', $disertantes);
    }

    public function create(){
    	return view('disertantes.create');
    }
}
