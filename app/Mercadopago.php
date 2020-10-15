<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mercadopago extends Model
{
    protected $fillable = ['collection_id', 'collection_status', 'external_reference', 'payment_type', 'merchant_order_id', 'preference_id', 'site_id', 'processing_mode', 'merchant_account_id', 'additional_info'];

    public function asistente(){
    	return $this->hasOne('\App\Asistente', 'mercadopagos_id', 'id');
    }
}

