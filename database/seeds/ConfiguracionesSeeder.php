<?php

use App\Configuracion;
use Illuminate\Database\Seeder;

class ConfiguracionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        Configuracion::truncate();
        Configuracion::create([
        	'id' => 1,
        	'mp_title' => 'ARANCEL CONGRESO', 
        	'mp_description' => 'XIX COSAE 2020', 
        	'mp_unit_price' => 300.10, 
        	'mp_access_token' => '', 
        	'mp_public_key' => '', 
        	'mp_client_id' => '3740950000440554', 
        	'mp_client_secret' => 'nMj7W08p3dMhCWPZXKogRjd91MQo8z3l'
        ]);
    }

}
