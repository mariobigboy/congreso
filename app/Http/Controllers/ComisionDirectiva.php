<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComisionDirectiva extends Controller
{
    public function index(){
    	return view('comision_directiva');
    }
}
