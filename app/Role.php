<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{
    /*public function roles(){
    	return $this
    		->belongsToMany('App\Role')
    		->withTimestamps();
    }*/

    public function users(){
    	return $this->belongsToMany('\App\User', 'role_user')
    				->withPivot('user_id')
    				->withTimestamps();
    }
}
