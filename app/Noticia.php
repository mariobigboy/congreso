<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model{
    //
    protected $fillable = ['titulo','cuerpo','categoria','meta_tags', 'foto_url'];

}
