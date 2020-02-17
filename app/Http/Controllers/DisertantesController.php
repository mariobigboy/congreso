<?php

namespace App\Http\Controllers;

use App\Disertante;
use App\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class DisertantesController extends Controller
{
    public function index(){
    	//disertantes:
    	/*$model_disertantes = Role::where('nombre', 'disertante')->first();
    	$disertantes = $model_disertantes->users;*/
        $disertantes = Disertante::select('disertante.id as disertante_id','persona.*')->join('persona', 'disertante.persona_id', '=', 'persona.id')->get(['disertante.id as disertante_id']);
    	return view('disertantes.index')->with('disertantes', $disertantes);
    }

    public function create(){
    	return view('disertantes.create');
    }

    public function store(Request $request, Disertante $model){

        //dd($request->all());

        $messages = [
            'required' => 'Campo requerido',
            'unique.email' => 'Ya existe el email',
            'unique.dni' => 'DNI existente',
            'required.foto_url' => 'Foto requerida',
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

        
        //Creando el nombre para la imagen y el thumb.
        $time_img = time();
        $img_name = $time_img.'.'.$request->foto_url->getClientOriginalExtension();
        $img_name_thumb = $time_img.'_thumb.'.$request->foto_url->getClientOriginalExtension();
        
        //creando las imagenes:
        //guardo las imagenes:
        $img_principal = Image::make($request->foto_url);
        $img_principal->save(public_path('images/avatar/').$img_name);

        $img_thumb = $img_principal->resize(50,50);
        $img_thumb->save(public_path('images/avatar/thumbs/').$img_name_thumb);

        //creo Persona y la asocio al disertante:
        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->dni = $request->dni;
        $persona->telefono = $request->telefono;
        $persona->pais = $request->pais;
        $persona->email = $request->email;
        //$persona->foto_url = 'avatar_default.png';
        $persona->foto_url = $img_name;
        $persona->save();

        $persona_id = $persona->id;

        $disertante = new Disertante();
        $disertante->persona_id = $persona_id;
        $disertante->fecha_congreso = $request->fecha_congreso;
        $disertante->hora_congreso = $request->hora_congreso;
        $disertante->save();
        

        //me quede aquí
        //$model->create($request->all());

        return redirect()->route('disertantes.index')->with('status', '¡Disertante añadido correctamente!');
    }

    public function update(Request $request){
        $messages = [
            'required' => 'Campo requerido',
            'unique.email' => 'Ya existe el email',
            'unique.dni' => 'DNI existente',
            //'required.foto_url' => 'Foto requerida',
        ];
        $rules = [
            //'dni' => 'sometimes|required|unique:persona',
            //'email' => 'sometimes|required|unique:persona|unique:users',
            //'foto_url' => 'required|image|mimes:jpeg,png,jpg|max:4096',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        $validator->validate();
        //dd($validator->errors());

       
        //$persona->update();

        if($validator->fails()){
            return back();
        }

        $request_params = $request->all();
        if(isset($request->foto_url)){
            //Creando el nombre para la imagen y el thumb.
            $time_img = time();
            $img_name = $time_img.'.'.$request->foto_url->getClientOriginalExtension();
            $img_name_thumb = $time_img.'_thumb.'.$request->foto_url->getClientOriginalExtension();
            //dd($img_name);
            //creando las imagenes:
            //guardo las imagenes:
            $img_principal = Image::make($request->foto_url);
            $img_principal->save(public_path('images/avatar/').$img_name);

            $img_thumb = $img_principal->resize(50,50);
            $img_thumb->save(public_path('images/avatar/thumbs/').$img_name_thumb);
            $request_params['foto_url'] = $img_name;
            //dd($request->foto_url);
        }

        //dd($request_params);
        $persona = Disertante::find($request->id)->persona;
        $persona->fill($request_params);
        //dd($request->all());
        $persona->update();

        return back()->with('success', '¡Actualizado correctamente!');
    }

    public function edit($id){
        //return 'edit : '.$;
        $disertante = Disertante::where('persona_id', $id)->first();
        if(!is_null($disertante)){
            $persona = $disertante->persona;
            return view('disertantes.edit')->with('persona', collect($persona->toArray())->merge($disertante->toArray()));
        }else{
            //redirige al index de disertantes en caso de no encontrar persona asociada al id
            return redirect('disertantes'); 
        }
    }

    public function destroy($id){

        $disertante = Disertante::where('id', $id)->first();
        if(!is_null($disertante)){
            $disertante->delete();

            return redirect()->route('disertantes.index')->with('success_delete', 'Disertante eliminado correctamente!');
        }

        return redirect()->route('disertantes.index')->with('error_delete', 'Error al eliminar el disertante!');
    }
}
