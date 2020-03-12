<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistente extends Model
{
   	protected $table = 'asistente';
      

   	public function personas(){
   		return $this->hasOne('\App\Persona', 'id', 'persona_id');
   	}

   	public function pagos(){
   		return $this->hasMany('\App\Mercadopago', 'id', 'mercadopagos_id');
   	}

      public function impagos(){
         return $this->hasMany('\App\Mercadopago', 'id', 'mercadopagos_id')->where('collection_status', '<>', 'approved');
      }

   	public function cursos(){
   		return $this->belongsToMany('\App\Curso', 'inscripciones');
   	}
}

