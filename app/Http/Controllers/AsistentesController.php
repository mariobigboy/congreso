<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Asistente;

class AsistentesController extends Controller
{
    public function index(){

    	//asistentes (users):
    	/*$model_role_admin = Role::where('nombre', 'asistente')->first();
    	$asistentes = $model_role_admin->users;*/

    	$asistentes = Asistente::select('asistente.*','persona.*')->join('persona', 'asistente.persona_id', '=', 'persona.id')->get();

    	return view('asistentes.index')->with('asistentes', $asistentes);
    }

    public function create(){
    	return view('asistentes.create');
    }
}
