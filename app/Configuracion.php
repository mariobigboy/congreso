<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    protected $table = 'configuraciones';
    protected $fillable = ['id', 'mp_title', 'mp_description', 'mp_unit_price', 'mp_access_token', 'mp_public_key', 'mp_client_id', 'mp_client_secret'];
 }
