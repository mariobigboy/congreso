<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Persona;
use App\User;
use App\Disertante;
use App\Asistente;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        
        $estadisticas = [
            'cant_asistente' => Asistente::all()->count(),
            'cant_asistente' => Asistente::where('matricula_id','!=', null)->count(),
            'cant_disertante' => Disertante::all()->count(),
            'cant_usuario' => User::all()->count(),
            'cant_persona' => Persona::all()->count(),
        ];
        //$users_cant = DB::table('users')->get()->count();
        return view('dashboard')->with('estadisticas', $estadisticas);
    }


}
