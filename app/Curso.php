<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model{
    
    protected $fillable = ['disertante_id', 'tema', 'fecha_curso', 'hora_curso', 'contenido', 'lugar', 'foto_url', 'precio'];


    public function disertante(){
    	return $this->hasOne('App\Disertante', 'id', 'disertante_id');
    }
}
