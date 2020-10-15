<?php

namespace App\Http\Controllers;

use App\Noticia;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class NoticiasController extends Controller
{
    /**
     * Display noticias page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $noticias = Noticia::all();
        //dd($noticias);
        return view('noticias.index')->with('noticias', $noticias);
    }

    public function edit($id){
        $noticia = Noticia::where('id', $id)->first();
        //dd($noticia);
        return view('noticias.edit')->with('noticia', $noticia);
    }

    public function update(Request $request){
        
        $messages = [
            'required.titulo' => 'Título requerido',
            'required.cuerpo' => 'Cuerpo de la noticia requerida',
            'foto_url' => 'No es una foto',
        ];
        $rules = [
            'titulo' => 'required',
            'cuerpo' => 'required',
            'foto_url' => 'image|mimes:jpeg,png,jpg|max:4096',
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
        $validator->validate();

        if($validator->fails()){
            return back()->with('error', '¡Ocurrió un error!');
        }

        $request_params = $request->all();
        if(isset($request->foto_url)){
            //creando las imagenes:
            //Creando el nombre para la imagen y el thumb.
            $time_img = time();
            $img_name = $time_img.'.'.$request->foto_url->getClientOriginalExtension();
            //guardo las imagenes:
            $img_principal = Image::make($request->foto_url);
            $img_principal->save('images/noticias/'.$img_name);

            $img_thumb = $img_principal->resize(600, 400);
            $img_thumb->save('images/noticias/thumbs/'.$img_name);
            $request_params['foto_url'] = $img_name;
        }

        $noticia = Noticia::where('id', $request->id)->first();
        $noticia->fill($request_params);
        $noticia->update();
        return back()->with('success', '¡Noticia Actualizada Correctamente!');
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
        //dd();
       
        $messages = [
            'required.titulo' => 'Título requerido',
            'required.cuerpo' => 'Cuerpo de la noticia requerida',
            'required.foto_url' => 'Se requiere una foto',
        ];
        $rules = [
            'titulo' => 'required',
            'cuerpo' => 'required',
            'foto_url' => 'required|image|mimes:jpeg,png,jpg|max:4096',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        $validator->validate();
        

        if($validator->fails()){
            return back();
        }

        //Creando el nombre para la imagen y el thumb.
        $time_img = time();
        $img_name = $time_img.'.'.$request->foto_url->getClientOriginalExtension();
        $img_name_thumb = $time_img.'.'.$request->foto_url->getClientOriginalExtension();
        
        //creando las imagenes:
        //guardo las imagenes:
        $img_principal = Image::make($request->foto_url);
        $img_principal->save('images/noticias/'.$img_name);

        $img_thumb = $img_principal->resize(600, 400);
        $img_thumb->save('images/noticias/thumbs/'.$img_name);
        
        $noticia = new Noticia();
        $noticia->fill($request->all());
        $noticia->user_id = auth()->user()->id;
        $noticia->foto_url = $img_name;
        $noticia->save();

        return back()->with('success', '¡Noticia guardada correctamente!');
    }
}
