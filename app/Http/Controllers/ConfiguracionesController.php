<?php

namespace App\Http\Controllers;

use App\Configuracion;
use Illuminate\Http\Request;

class ConfiguracionesController extends Controller{
    
    public function index(){
    	$configs = Configuracion::all()->first();
    	return view('configuraciones.index')->with(['configs' => $configs]);
    }

    public function save(Request $request){
    	//dd($request);
    	if($request){
    		$configs = Configuracion::all()->first();
    		$configs->fill($request->all());
    		$configs->update();
    	}
    	return back();
    }
}
