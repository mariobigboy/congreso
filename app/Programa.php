<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'foto_url', 'fecha_curso', 'hora_curso', 'lugar', 'precio', 'disertante_id'];

    public function disertante(){
    	return $this->hasOne('App\Disertante', 'id', 'disertante_id');
    }
}
