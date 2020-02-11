<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsistentesController extends Controller
{
    public function index(){

    	$users = DB::table('users')->get();

    	//dd($users);
    	return view('asistentes.index')->with('users', $users);
    }

    public function create(){
    	return view('asistentes.create');
    }
}
