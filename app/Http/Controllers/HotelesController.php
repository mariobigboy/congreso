<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelesController extends Controller
{
    public function index(){
    	return view('hoteles.acommodation');
    }

    public function hotel($id){
    	switch ($id) {
    		case '1':
    			return view('hoteles.hotel1');
    			break;
    		case '2':
    			return view('hoteles.hotel2');
    			break;
    		case '3':
    			return view('hoteles.hotel3');
    			break;
    		case '4':
    			return view('hoteles.hotel4');
    			break;
    		case '5':
    			return view('hoteles.hotel5');
    			break;
    		case '6':
    			return view('hoteles.hotel6');
    			break;
    		default:
    			abort(404, "No se encontró la página");
    			break;
    	}
    }
}
