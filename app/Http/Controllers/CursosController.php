<?php

namespace App\Http\Controllers;

use App\Disertante;
use App\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CursosController extends Controller
{
    //
    public function index(){
    	$cursos = Curso::all();

    	return view('cursos.index')->with('cursos', $cursos);
    }

    public function create(){
    	$disertantes = Disertante::all();
    	return view('cursos.create')->with('disertantes', $disertantes);
    }

    public function store(Request $request){
    	$rules = [
    		'disertante_id' => 'required',
			'tema' => 'required',
			'fecha_curso' => 'required',
			'hora_curso' => 'required',
			'contenido' => 'required',
			'lugar' => 'required',

    	];
    	$messages = [
    		'require.tema' => 'Necesita ingresar un tema',
    		'require.disertante_id' => 'Es necesario elegir un dirsertante',
    	];

    	$validator = Validator::make($request->all(), $rules, $messages);
    	$validator->validate();
    	
    	if($validator->fails()){
    		return back();
    	}

    	$curso = new Curso();
    	$curso->fill($request->all());
    	$curso->save();
    }

    public function edit(){

    }

    public function destroy(){
    	/* $disertante = Disertante::where('id', $id)->first();
        if(!is_null($disertante)){
            $disertante->delete();

            return redirect()->route('disertantes.index')->with('success_delete', 'Disertante eliminado correctamente!');
        }

        return redirect()->route('disertantes.index')->with('error_delete', 'Error al eliminar el disertante!');*/
    }
}
