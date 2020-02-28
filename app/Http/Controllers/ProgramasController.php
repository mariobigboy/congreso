<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Programa;

class ProgramasController extends Controller
{
    public function index(){
    	return view('programas.index');
    }

    public function create(){
    	return view('programas.create');
    }

    public function todos(){
    	$programas = Programa::all();
    	return view('programas.todos')->with('programas', $programas);
    }
}
