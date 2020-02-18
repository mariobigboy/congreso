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

        return back()->with('success', '¡Curso guardado correctamente!');
    }

    public function edit($id){
        $curso = Curso::where('id', $id)->first();
        $disertantes = Disertante::all();
        return view('cursos.edit')->with(['curso' => $curso, 'disertantes' => $disertantes]);

    }
    
    public function update(Request $request){
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

        $curso = Curso::find($request->id)->first();
        $curso->fill($request->all());
        $curso->update();

        return redirect()->route('cursos.index')->with('success', '¡Editado correctamente!');
    }

    public function destroy($id){
    	$curso = Curso::where('id', $id)->first();
        if(!is_null($curso)){
            $curso->delete();

            return redirect()->route('cursos.index')->with('success', '¡Curso eliminado correctamente!');
        }

        return redirect()->route('cursos.index')->with('error', '¡Error al eliminar el curso!');
    }
}
