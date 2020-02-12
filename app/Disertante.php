<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disertante extends Model
{
    protected $table = 'disertante';

    public function persona(){
   		return $this->hasOne('\App\Persona', 'id', 'persona_id');
   	}
}
