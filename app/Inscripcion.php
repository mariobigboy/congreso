<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = 'inscripciones';

    public function cursos(){
    	return $this->hasMany('\App\Curso', 'curso_id', 'id');
    }
}
