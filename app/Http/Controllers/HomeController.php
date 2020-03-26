<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Persona;
use App\User;
use App\Disertante;
use App\Asistente;
use App\Curso;

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
        if(auth()->user()->hasRole('superadmin') || auth()->user()->hasRole('admin')){
            $estadisticas = [
                'cant_asistente' => Asistente::all()->count(),
                //'cant_asistente' => Asistente::where('matricula_id','!=', null)->count(),
                'cant_disertante' => Disertante::all()->count(),
                'cant_usuario' => User::all()->count(),
                'cant_persona' => Persona::all()->count(),
                'cant_curso' => Curso::all()->count(),
            ];
            return view('dashboard')->with('estadisticas', $estadisticas);    
        }        

        if(auth()->user()->hasRole('asistente')){
            $asistente = auth()->user()->persona->asistente->first();
            //$pagos = $asistente->pagos;
            
            return view('dashboard');//->with('pagos', $pagos);
        }

    }


}
