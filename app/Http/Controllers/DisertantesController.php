<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disertante;
use App\Persona;

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

    public function store(Request $request, Disertante $model){
        
        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->dni = $request->dni;
        $persona->telefono = $request->telefono;
        $persona->pais = $request->pais;
        $persona->email = $request->email;
        $persona->foto_url = 'foto.jpg';
        $persona->save();

        $persona_id = $persona->id;

        $disertante = new Disertante();
        $disertante->persona_id = $persona_id;
        $disertante->fecha_congreso = now();//$request->fecha_congreso;
        $disertante->save();
        

        //me quede aquí
        //$model->create($request->all());

        return redirect()->route('disertantes.index')->with('status', '¡Disertante añadido correctamente!');
    }

    public function edit($id){
        //return 'edit : '.$;
        return view('disertantes.edit');
    }
}
