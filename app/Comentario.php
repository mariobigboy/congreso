<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    public function respuestas(){
    	return $this->hasMany('\App\Respuesta');
    }
    public function user(){
    	return $this->hasOne('\App\User', 'id', 'user_id');
    }
}
