<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disertante;

class LandingController extends Controller
{
    //

    public function index(){

    	
    	$disertantes = Disertante::all();

    	return view('landing')->with(['disertantes' => $disertantes]);
    }
}
