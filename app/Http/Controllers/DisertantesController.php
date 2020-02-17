<?php

namespace App\Http\Controllers;

use App\Disertante;
use App\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DisertantesController extends Controller
{
    public function index(){
    	//disertantes:
    	/*$model_disertantes = Role::where('nombre', 'disertante')->first();
    	$disertantes = $model_disertantes->users;*/
        $disertantes = Disertante::select('disertante.id as disertante_id','persona.*')->join('persona', 'disertante.persona_id', '=', 'persona.id')->get(['disertante.id as disertante_id']);
    	return view('disertantes.index')->with('disertantes', $disertantes);
    }

    public function create(){
    	return view('disertantes.create');
    }

    public function store(Request $request, Disertante $model){

        //dd($request->all());

        $messages = [
            'required' => 'Campo requerido',
            'unique.email' => 'Ya existe el email',
            'unique.dni' => 'DNI existente',

        ];
        $rules = [
            'dni' => 'required|unique:persona',
            'email' => 'required|unique:persona|unique:users',
            'foto_url' => 'required|image|mimes:jpeg,png,jpg|max:4096',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        $validator->validate();

        if($validator->fails()){
            return back();
        }

        /*
            "_token" => "745V799wBSOF1eOvank8BbRi0RKZ4QzCvJGN8Db2"
          "nombre" => "mariel"
          "apellido" => "barragan"
          "dni" => "35123123"
          "email" => "mariel@gmail.com"
          "telefono" => "3875687312"
          "pais" => "argentina"
          "fecha_congreso" => "21/02/2020"
          "fecha_congreso_submit" => "21/02/2020"
          "hora_congreso" => "22:00"
          "hora_congreso_submit" => "22:00"
        */
        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->dni = $request->dni;
        $persona->telefono = $request->telefono;
        $persona->pais = $request->pais;
        $persona->email = $request->email;
        $persona->foto_url = 'avatar_default.png';
        $persona->save();

        $persona_id = $persona->id;

        $disertante = new Disertante();
        $disertante->persona_id = $persona_id;
        $disertante->fecha_congreso = $request->fecha_congreso;
        $disertante->hora_congreso = $request->hora_congreso;
        $disertante->save();
        

        //me quede aquí
        //$model->create($request->all());

        return redirect()->route('disertantes.index')->with('status', '¡Disertante añadido correctamente!');
    }

    public function update(){
        
    }

    public function edit($id){
        //return 'edit : '.$;
        $disertante = Disertante::where('persona_id', $id)->first();
        if(!is_null($disertante)){
            $persona = $disertante->persona;
            return view('disertantes.edit')->with('persona', collect($persona->toArray())->merge($disertante->toArray()));
        }else{
            //redirige al index de disertantes en caso de no encontrar persona asociada al id
            return redirect('disertantes'); 
        }
    }

    public function destroy($id){

        $disertante = Disertante::where('id', $id)->first();
        if(!is_null($disertante)){
            $disertante->delete();

            return redirect()->route('disertantes.index')->with('success_delete', 'Disertante eliminado correctamente!');
        }

        return redirect()->route('disertantes.index')->with('error_delete', 'Error al eliminar el disertante!');
    }
}
