<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;

class AsistentesController extends Controller
{
    public function index(){

    	//asistentes (users):
    	//$id_role_admin = Role::where('nombre', 'user')->value('id');
    	//$model_role_admin = Role::find($id_role_admin);
    	$model_role_admin = Role::where('nombre', 'asistente')->first();
    	$asistentes = $model_role_admin->users;
    	//dd($asistentes);
    	//dd($users);
    	return view('asistentes.index')->with('asistentes', $asistentes);
    }

    public function create(){
    	return view('asistentes.create');
    }
}
