<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Programa;
use App\Disertante;
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
        $disertantes = Disertante::all();
    	return view('programas.create')->with('disertantes', $disertantes);
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
            $img_principal->save('images/programas/'.$img_name);

            $img_principal->resize(600,400);
            $img_principal->save('images/programas/thumbs/'.$img_name);

            $request_params['foto_url'] = $img_name;
        }

        $programa = Programa::where('id', $request->id)->first();
        $programa->fill($request_params);
        $programa->update();

        return back()->with('success', '¡Programa actualizado correctamente!');
    }

    public function store(Request $request){
        //dd($request);

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
        $validator = Validator::make($request_params, $rules, $messages);
        $validator->validate();
        //dd($validator);

        if($validator->fails()){
            //dd($errors);
            return back();
        }

        //Creando el nombre para la imagen y el thumb.
        $time_img = time();
        $img_name = $time_img.'.'.$request->foto_url->getClientOriginalExtension();
        
        //creando las imagenes:
        //guardo las imagenes:
        $img_principal = Image::make($request->foto_url);
        $img_principal->save('images/programas/'.$img_name);

        $img_principal->resize(600, 400);
        $img_principal->save('images/programas/thumbs/'.$img_name);

        $request_params['foto_url'] = $img_name;

        Programa::create($request_params);
        return back()->with('success', '¡Programa añadido correctamente!');
    }

    public function todos(){
    	//$programas = Programa::all();
        $cursos = Curso::orderBy('hora_curso', 'asc')->get();
        $programas = Programa::orderBy('hora_curso', 'asc')->get();
        foreach($programas as $programa){
            $programa->tema = $programa->titulo;
            $cursos->push($programa);
        }
        $cursos->sortBy(function($elem){
            return $elem->hora_curso;
        });
        $day26 = array();
        $day27 = array();
        $day28 = array();
        $day29 = array();
        foreach($cursos as $curso){
            switch ($curso->fecha_curso) {
                case '26/08/2020':
                    array_push($day26, $curso);
                    break;
                case '27/08/2020':
                    array_push($day27, $curso);
                    break;
                case '28/08/2020':
                    array_push($day28, $curso);
                    break;
                case '29/08/2020':
                    array_push($day29, $curso);
                    break;
                
            }
        }
    	return view('programas.todos')->with([
            'cursos' => $cursos,
            'day26' => $day26,
            'day27' => $day27,
            'day28' => $day28,
            'day29' => $day29
        ]);
    }
}
