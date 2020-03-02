<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model{
    protected $table = 'persona';
    protected $fillable = ['nombre', 'apellido', 'telefono', 'pais', 'foto_url'];

    
	/*public function asistente(){
		return $this->belongsTo('\App\Asistente', 'email', 'email');
	}    */
}
	