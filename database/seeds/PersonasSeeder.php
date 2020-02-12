<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Persona;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	Schema::disableForeignKeyConstraints();
        Persona::truncate();
        Schema::enableForeignKeyConstraints();

        $persona = new Persona();
        $persona->nombre = 'persona1';
        $persona->apellido = 'apellido1';
        $persona->dni = '35480920';
        $persona->telefono = '3875687362';
        $persona->pais = 'Argentina';
        $persona->email = 'palinejs@gmail.com';
        $persona->foto_url = 'images/avatar1.jpg';
        $persona->save();

        $persona = new Persona();
        $persona->nombre = 'persona2';
        $persona->apellido = 'apellido2';
        $persona->dni = '35480922';
        $persona->telefono = '3875687363';
        $persona->pais = 'Argentina';
        $persona->email = 'palinejs2@gmail.com';
        $persona->foto_url = 'images/avatar2.jpg';
        $persona->save();
    }
}
