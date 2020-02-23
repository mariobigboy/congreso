<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Persona;
use App\User;
use App\Asistente;
use MP;


class InscripcionController extends Controller
{

	//return index page:
	public function index(){
        $preferenceData = [
            'items' => [
                [
                    'id' => 12,
                    'category_id' => 'school',
                    'title' => 'Congreso de Endodoncia',
                    'description' => 'XIX COSAE 2020',
                    'quantity' => 1,
                    'currency_id' => 'ARS',
                    'unit_price' => 150
                ]
            ],
        ];

        //$preference = MP::create_preference($preferenceData);
        //dd($preference);
        
        
		return view('inscripcion');
	}

    //nueva inscripcion:
    public function store(Request $request){

    	$messages = [
    		'required' => 'El campo :attribute es requerido',
    		'unique' => 'El :attribute ya existe',
    		'dni.regex' => 'El formato del DNI es incorrecto. Solo utilice números',
    		'dni.unique' => 'El DNI ya existe'
    	];

    	$validator = Validator::make($request->all(),[
    		'nombres' => 'required',
    		'apellidos' => 'required',
    		'dni' => 'required|unique:persona|regex:/^[0-9]{8}+$/',
			'email' => 'required|unique:persona|unique:users',
			'password' => 'required'
    	], $messages);

    	if($validator->fails()){
    		return redirect()->route('inscripcion.index')->withErrors($validator);
    	}


    	//aquí guardar inscripción
    	$persona = new Persona();
    	$persona->nombre = $request->nombres;
    	$persona->apellido = $request->apellidos;
    	$persona->email = $request->email;
    	$persona->dni = $request->dni;
    	$persona->telefono = $request->telefono;
    	$persona->pais = null;
    	$persona->foto_url = 'avatar_default.png';
    	$persona->save();

    	$persona_id = $persona->id;

        //creamos asistente y lo asociamos:
        $asistente = new Asistente();
        $asistente->persona_id = $persona_id;
        $asistente->save();


    	//creamos un usuario para la persona anteriormente creada:
    	$usuario = new User();
    	$usuario->name = $request->nombres;
    	$usuario->email = $request->email;
    	$usuario->password = bcrypt($request->password);
    	$usuario->save();
    	

    	//luego redirigir con mensaje de éxito:
    	return redirect()->route('inscripcion.index')->with('success_register', 'success');

    }

    
}
