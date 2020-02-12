<?php

use Illuminate\Database\Seeder;
use App\Persona;
use App\Asistente;

class AsistenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	Schema::disableForeignKeyConstraints();
        Asistente::truncate();
        Schema::enableForeignKeyConstraints();

        $persona = Persona::all()->first();

        $asistente = new Asistente();
        $asistente->persona_id = $persona->id;
        $asistente->matricula_id = null;
        $asistente->save();
    }
}
