<?php

namespace App\Http\Controllers;

use MP;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Persona;
use App\User;
use App\Role;
use App\Asistente;
use App\Mercadopago;
//use Vinkla\Instagram\Instagram;

class InscripcionController extends Controller{

	//return index page:
	public function index(Request $request){
        
        //$instagram = new Instagram('IGQVJXeWJQVXVoTjlzODk3Yk9tckQ4aFI0TFhmd2JFOUlYZAHQtc3Q0VnpHdUdJeWFCaUMzekFkZAlRKYjJBdGNkMmJjQ19MeEp0VmRfaXlSZAjRkRHNmdXZAHdm9mOF9PWG91S1RlT0N3');
        //dd($instagram->media(['count'=>9]));

        $request_all = $request->all();
        if(sizeof($request_all)>0){
            //$mercadopago = Mercadopago::create($request_all);
            if($request_all['collection_status']=='approved'){
                return redirect('/login')->with('message', '¡Registrado correctamente!');
            }
        }
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

        //asignamos un rol asistente:
        $role_asistente = Role::where('nombre', 'asistente')->first();


    	//creamos un usuario para la persona anteriormente creada:
    	$usuario = new User();
    	$usuario->name = $request->nombres;
    	$usuario->email = $request->email;
    	$usuario->password = bcrypt($request->password);
    	$usuario->save();
        $usuario->roles()->attach($role_asistente);


        //creamos la preferencia de pago:
    	$preferenceData = [
            'back_urls' => [
                'success' => env('APP_URL').'/inscripcion',
                'pending' => env('APP_URL').'/inscripcion',
                'failure' => env('APP_URL').'/inscripcion'
            ],
            'auto_return' => 'approved',
            'items' => [
                [
                    'id' => 12,
                    'category_id' => 'school',
                    'title' => 'Arancel Congreso',
                    'description' => 'XIX COSAE 2020',
                    'quantity' => 1,
                    'currency_id' => 'ARS',
                    'unit_price' => 130
                ]
            ],
        ];

        $preference = MP::create_preference($preferenceData);
        //dd($preference['response']['init_point']);
        
        //redirigimos al pago:
        return redirect($preference['response']['init_point']);

    	//luego redirigir con mensaje de éxito:
    	//return redirect()->route('inscripcion.index')->with('success_register', 'success');

    }

    
}
