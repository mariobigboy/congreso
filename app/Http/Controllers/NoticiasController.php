<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    /**
     * Display noticias page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('noticias.index');
    }

    /**
     * Display noticias page
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request){
        
        return view('noticias.create');
    }

    public function store(Request $request){
        /*
        $messages = [
            'required' => 'Campo requerido',
            'unique.email' => 'Ya existe el email',
            'unique.dni' => 'DNI existente',

        ];
        $rules = [
            'dni' => 'required|unique:persona',
            'email' => 'required|unique:persona|unique:users',
            'foto_url' => 'required|image|mimes:jpeg,png,jpg|max:4096',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        $validator->validate();

        if($validator->fails()){
            return back();
        }
        */
    }
}
