<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsistentesController extends Controller
{
    public function index(){
    	return view('asistentes.index');
    }

    public function create(){
    	return view('asistentes.create');
    }
}
