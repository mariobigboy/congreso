<?php

namespace App\Http\Controllers;

use App\Asistente;
use App\Curso;
use App\Disertante;
use App\Inscripcion;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class WorkshopController extends Controller
{
    public function index(){
    	$cursos = Curso::where('is_workshop', 1)->get();

    	return view('workshops.index')->with('cursos', $cursos);
    }

    public function todos(){
        $cursos = Curso::paginate(30);
        /*$programas = Programa::all();
        foreach($programas as $programa){
            $programa->tema = $programa->titulo;
            $cursos->push($programa);
        }*/
        //dd($cursos);
        return view('workshops.todos')->with('cursos', $cursos);
    }

    public function my_workshops(){
        //todos los cursos:
        $cursos = Curso::where('is_workshop', 1)->get();
        //Usuario actual:
        $current_user = auth()->user();
        $user_id = $current_user->id;
        //persona del usuario:
        $persona_id = $current_user->persona->id;
        $asistente = Asistente::where('persona_id', $persona_id)->first();
        $cursos_inscripto = $asistente->cursos;

        $ids_cursos_inscripto = $cursos_inscripto->pluck('id');
        
        return view('workshops.my')->with([
            'cursos_inscripto' => $cursos_inscripto, 
            'ids_cursos_inscripto' => $ids_cursos_inscripto,
            'cursos' => $cursos,
            'asistente' => $asistente,
        ]);
    }

    public function save_my_workshops(Request $request){
        $request_all = $request->all();
        $asistente_id = $request_all['asistente_id'];
        $ids_cursos = isset($request_all['cursos'])? $request_all['cursos'] : [];

        if(sizeof($ids_cursos)>0){
            foreach($ids_cursos as $id_curso){
                Inscripcion::create(['asistente_id' => $asistente_id, 'curso_id' => $id_curso]);
            }
            return back()->with('success', '¡Cursos registrados correctamente!');
        }else{
            return back()->with('error', 'No seleccionó cursos');
        }
    }

    public function create(){
    	$disertantes = Disertante::all();
    	return view('workshops.create')->with('disertantes', $disertantes);
    }

    public function store(Request $request){
        //dd($request);
    	$rules = [
    		'disertante_id' => 'required',
			'tema' => 'required',
			'fecha_curso' => 'required',
			'hora_curso' => 'required',
			'contenido' => 'required',
			'lugar' => 'required',
            'foto_url' => 'image|mimes:jpeg,png,jpg,octet-stream|max:10096',
    	];
    	$messages = [
    		'require.tema' => 'Necesita ingresar un tema',
    		'require.disertante_id' => 'Es necesario elegir un dirsertante',
    	];

    	$validator = Validator::make($request->all(), $rules, $messages);
    	$validator->validate();
    	
    	if($validator->fails()){
    		return back();
    	}

        $request_params = $request->all();
        //Creando el nombre para la imagen y el thumb.
        $time_img = time();
        $img_name = $time_img.'.'.$request->foto_url->getClientOriginalExtension();
        $img_name_thumb = $time_img.'.'.$request->foto_url->getClientOriginalExtension();
        
        $request_params['foto_url'] = $img_name;
        //creando las imagenes:
        //guardo las imagenes:
        $img_principal = Image::make($request->foto_url);
        $img_principal->save('images/cursos/'.$img_name);

        $img_thumb = $img_principal->resize(600, 400);
        $img_thumb->save('images/cursos/thumbs/'.$img_name);
        
        
        //dd($request);
    	$curso = new Curso();
    	$curso->fill($request_params);
        $curso->foto_url = $img_name;
        $curso->is_workshop = 1; //esto diferencia un curso de un workshop
    	$curso->save();

        return back()->with('success', '¡Curso guardado correctamente!');
    }

    public function edit($id){
        $curso = Curso::where('id', $id)->first();
        $disertantes = Disertante::all();
        return view('workshops.edit')->with(['curso' => $curso, 'disertantes' => $disertantes]);

    }
    
    public function update(Request $request){
        $rules = [
            'disertante_id' => 'required',
            'tema' => 'required',
            'fecha_curso' => 'required',
            'hora_curso' => 'required',
            'contenido' => 'required',
            'lugar' => 'required',
            'foto_url' => 'image|mimes:jpeg,png,jpg|max:4096',
        ];
        $messages = [
            'require.tema' => 'Necesita ingresar un tema',
            'require.disertante_id' => 'Es necesario elegir un dirsertante',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        $validator->validate();
        
        if($validator->fails()){
            return back();
        }

        $request_params = $request->all();
        //dd(is_null($request->foto_url));
        if(!is_null($request->foto_url)){
            //dd($request);
            //creando las imagenes:
            //Creando el nombre para la imagen y el thumb.
            $time_img = time();
            $img_name = $time_img.'.'.$request['foto_url']->getClientOriginalExtension();
            //guardo las imagenes:
            $img_principal = Image::make($request['foto_url']);
            $img_principal->save('images/cursos/'.$img_name);

            $img_thumb = $img_principal->resize(600, 400);
            $img_thumb->save('images/cursos/thumbs/'.$img_name);
            $request_params['foto_url'] = $img_name;
        }

        $curso = Curso::where('id', $request->id)->first();
        $curso->fill($request_params);
        $curso->update();

        return redirect()->route('workshops.index')->with('success', '¡Editado correctamente!');
    }

    public function destroy($id){
    	$curso = Curso::where('id', $id)->first();
        if(!is_null($curso)){
            $curso->delete();

            return redirect()->route('workshops.index')->with('success', '¡Curso eliminado correctamente!');
        }

        return redirect()->route('workshops.index')->with('error', '¡Error al eliminar el curso!');
    }
}
