<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = 'inscripciones';
    protected $fillable = ['asistente_id', 'curso_id'];

    public function cursos(){
    	return $this->hasMany('\App\Curso', 'curso_id', 'id');
    }
}
