<?php

use Illuminate\Database\Seeder;
use App\Persona;
use App\Disertante;

class DisertanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Disertante::truncate();
        Schema::enableForeignKeyConstraints();

       /* $persona = Persona::find(2)->first();

        $disertante = new Disertante();
        $disertante->persona_id = $persona->id;*/
        //$disertante->timestamps();
    }
}
