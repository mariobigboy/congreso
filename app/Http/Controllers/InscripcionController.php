<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscripcionController extends Controller
{

	//return index page:
	public function index(){
		return view('inscripcion');
	}

    //nueva inscripcion:
    public function store(Request $request){

    	$validatedData = $request->validate([
    		'nombres' => 'required'
    	]);
    	return redirect()->route('inscripcion.index'); //->with('error_register', 'Ya existe este email');
    }

    
}
