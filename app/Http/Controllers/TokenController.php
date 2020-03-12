<?php

namespace App\Http\Controllers;

use App\User;
use App\Token;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function index(Request $request){
    	if(count($request->all())>0){
	    	$tokenModel = Token::where('token', $request->token)->get()->first();
	    	if($tokenModel){
		    	$email = $tokenModel->email;

		    	$user = User::where('email', $email)->get()->first();
		    	$user->email_verified_at = now();
		    	$user->update();
		    	return redirect()->route('login')->with('confirm_success', '¡Correo confirmado correctamente!');
	    	}
	    	return redirect()->route('inscripcion.index');
    	}
    	return redirect()->route('landing');
    }
}
