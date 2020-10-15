<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model{
    //
    protected $fillable = ['titulo','cuerpo','categoria','meta_tags', 'foto_url'];
    protected $dates = ['created_at', 'updated_at', 'fecha'];

    public function user(){
    	return $this->hasOne('\App\User', 'id', 'user_id');
    }
}
