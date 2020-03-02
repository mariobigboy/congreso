<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistente extends Model
{
   	protected $table = 'asistente';

   	public function personas(){
   		return $this->hasOne('\App\Persona', 'id', 'persona_id');
   	}

   	public function pago(){
   		return $this->hasOne('\App\Mercadopago', 'id', 'mercadopagos_id');
   	}

   	public function cursos(){
   		return $this->belongsToMany('\App\Curso', 'inscripciones');
   	}
}

