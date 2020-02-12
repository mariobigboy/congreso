<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistente extends Model
{
   	protected $table = 'asistente';

   	public function personas(){
   		return $this->hasOne('\App\Persona', 'id', 'persona_id');
   	}
}

