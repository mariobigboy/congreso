<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriptor extends Model
{
    protected $table = 'subscriptores';
    protected $fillable = ['email', 'active'];
}
