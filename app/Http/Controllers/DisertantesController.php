<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisertantesController extends Controller
{
    public function index(){
    	return view('disertantes.index');
    }

    public function create(){
    	return view('disertantes.create');
    }
}
