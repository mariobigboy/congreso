<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact as ContactEmail;

class ContactoController extends Controller
{
    
    public function index(){
    	return view('contacto.index');
    }

    public function message(Request $request){
    	
    	$name = $request->name;
    	$email = $request->email;
    	$mensaje = $request->message;

    	

    	Mail::to('info@cosae2020.com', 'Contact Web')
        	->send(new ContactEmail($name, $email, $mensaje));
    	
    	return view('contacto.index')->with('success_message', '¡Email enviado correctamente!');
    }
}
