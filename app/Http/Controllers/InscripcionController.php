<?php

namespace App\Http\Controllers;

use MP;
use App\User;
use App\Role;
use App\Token;
use App\Persona;
use App\Asistente;
use App\Mercadopago;
use App\Configuracion;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Welcome as WelcomeEmail;
use Illuminate\Support\Facades\Validator;
//use Vinkla\Instagram\Instagram;

class InscripcionController extends Controller{

	//return index page:
	public function index(Request $request){
        
        $request_all = $request->all();
        if(sizeof($request_all)>0){
            $mercadopago = Mercadopago::where('external_reference', $request_all['external_reference'])->first();
            $mercadopago->fill([
                "collection_id" => ($request_all['collection_id']=="null")? null : $request_all['collection_id'],
                "collection_status" => ($request_all['collection_status']=="null")? null : $request_all['collection_status'],
                "external_reference" => ($request_all['external_reference']=="null")? null : $request_all['external_reference'],
                "payment_type" => ($request_all['payment_type']=="null")? null : $request_all['payment_type'],
                "merchant_order_id" => ($request_all['merchant_order_id']=="null")? null : $request_all['merchant_order_id'],
                "preference_id" => ($request_all['preference_id']=="null")? null : $request_all['preference_id'],
                "site_id" => ($request_all['site_id']=="null")? null : $request_all['site_id'],
                "processing_mode" => ($request_all['processing_mode']=="null")? null : $request_all['processing_mode'],
                "merchant_account_id" => ($request_all['merchant_account_id']=="null")? null : $request_all['merchant_account_id']
            ]);
            $mercadopago->update();

            if($request_all['collection_status']=='approved'){
                return redirect('/login')->with('message', '¡Registrado correctamente!');
            }else{
                return redirect('/login')->with('error', '¡No se registró el pago!');
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

        //external_reference para pagos:
        //$external_reference = time();


        //$configuraciones = Configuracion::all()->first();

        //creamos la preferencia de pago:
        /*$preferenceData = [
            'external_reference' => $external_reference,
            'back_urls' => [
                'success' => env('APP_URL').'/inscripcion',
                'pending' => env('APP_URL').'/inscripcion',
                'failure' => env('APP_URL').'/inscripcion'
            ],
            'items' => [
                [
                    'category_id' => 'school',
                    'title' => $configuraciones->mp_title,
                    'description' => $configuraciones->mp_description,
                    'quantity' => 1,
                    'currency_id' => 'ARS',
                    'unit_price' => $configuraciones->mp_unit_price
                ]
            ],
            'additional_info' => "INSCRIPCION"
        ];

        $preference = MP::create_preference($preferenceData);


        $mercadopago = new Mercadopago();
        $mercadopago->id = intval($external_reference);
        $mercadopago->fill([
            'external_reference' => $external_reference, 
            'collection_status' => 'pending',
            'preference_id' => $preference['response']['id'],
            'additional_info' => 'INSCRIPCION'
        ]);
        $mercadopago->save();*/

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
        //$asistente->mercadopagos_id = $external_reference;
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
        
        $token = new Token([
            'email' => $usuario->email,
            'token' => Str::random(32)
        ]);
        $token->save();
        //dd($token);
        Mail::to($token->email, $persona->nombre)->send(new WelcomeEmail($token->token));

        
        //dd($preference['response']['init_point']);
        
        //redirigimos al pago:
        //return redirect($preference['response']['init_point']);

    	//luego redirigir con mensaje de éxito:
    	return redirect()->route('inscripcion.index')->with('success_register', 'success');

    }

    
}
