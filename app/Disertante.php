<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disertante extends Model
{
    protected $table = 'disertante';
    protected $fillable = ['prefijo', 'destacado', 'cv'];

     
    public function persona(){
   		return $this->hasOne('\App\Persona', 'id', 'persona_id');
      //->orderBy('apellido', 'asc')->orderBy('nombre', 'asc');
   	}

   	public function user(){
   		return $this->hasOne('\App\User', 'persona_id', 'id');
   	}

   	public function cursos(){
   		return $this->hasMany('App\Curso');
   	}
}
