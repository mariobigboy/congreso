<?php

namespace App\Http\Controllers;

use App\Programa;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class ProgramasController extends Controller{

    public function index(){
        $programas = Programa::all();
    	return view('programas.index')->with('programas', $programas);
    }

    public function create(){
        /* ['id', 'titulo', 'descripcion', 'foto_url'] */
    	return view('programas.create');
    }

    public function edit($id){
        $programa = Programa::where('id', $id)->first();
        return view('programas.edit')->with('programa', $programa);
    }
    public function delete($id){
        $programa = Programa::where('id', $id)->first();
        $programa->delete();
        return back()->with('success', '¡Programa eliminado correctamente!');
    }

    public function update(Request $request){
        $request_params = $request->all();

        $messages = [
            'required' => 'Campo requerido',
            'required.foto_url' => 'Foto requerida',
        ];
        $rules = [
            'titulo' => 'required',
            'descripcion' => 'required',
            'foto_url' => 'image|mimes:jpeg,png,jpg|max:4096',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        $validator->validate();
        //dd($validator);

        if($validator->fails()){
            return back();
        }

        if(!is_null($request->foto_url)){
            //Creando el nombre para la imagen y el thumb.
            $time_img = time();
            $img_name = $time_img.'.'.$request->foto_url->getClientOriginalExtension();
            
            //creando las imagenes:
            //guardo las imagenes:
            $img_principal = Image::make($request->foto_url);
            $img_principal->save(public_path('images/programas/').$img_name);

            $img_principal->resize(50,50);
            $img_principal->save(public_path('images/programas/thumbs/').$img_name);

            $request_params['foto_url'] = $img_name;
        }

        $programa = Programa::where('id', $request->id)->first();
        $programa->fill($request_params);
        $programa->update();

        return back()->with('success', '¡Programa actualizado correctamente!');
    }

    public function store(Request $request){

        $request_params = $request->all();

        $messages = [
            'required' => 'Campo requerido',
            'required.foto_url' => 'Foto requerida',
        ];
        $rules = [
            'titulo' => 'required',
            'descripcion' => 'required',
            'foto_url' => 'required|image|mimes:jpeg,png,jpg|max:4096',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        $validator->validate();
        //dd($validator);

        if($validator->fails()){
            return back();
        }

        //Creando el nombre para la imagen y el thumb.
        $time_img = time();
        $img_name = $time_img.'.'.$request->foto_url->getClientOriginalExtension();
        
        //creando las imagenes:
        //guardo las imagenes:
        $img_principal = Image::make($request->foto_url);
        $img_principal->save(public_path('images/programas/').$img_name);

        $img_principal->resize(50,50);
        $img_principal->save(public_path('images/programas/thumbs/').$img_name);

        $request_params['foto_url'] = $img_name;

        Programa::create($request_params);
        return back()->with('success', '¡Programa añadido correctamente!');
    }

    public function todos(){
    	$programas = Programa::all();
    	return view('programas.todos')->with('programas', $programas);
    }
}
