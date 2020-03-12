<?php

namespace App\Http\Controllers;

use App\Subscriptor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubscribeController extends Controller
{
    public function save(Request $request){
    	$rules = ['email' => 'required|unique:subscriptores'];
    	$messages = [
    		'email.required' => 'Email requerido',
    		'email.unique' => 'Email ya existe'
    	];
    	$validator = Validator::make($request->all(), $rules, $messages);
    	$validator->validate();

    	if($validator->fails()){
    		
    		return back()->with('error_newsletter', 'error');
    	}
    	$subs = Subscriptor::create($request->all());
    	return back()->with('success_newsletter', 'success');
    }
}
