<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //Creacion de roles:
        $this->call([RoleTableSeeder::class]);

        //usuarios necesitaran los roles previamente generados:
        $this->call([UserTableSeeder::class]);

        //seeders para personas:
        //$this->call([PersonasSeeder::class]);

        //seeders para disertantes:
        //$this->call([DisertanteSeeder::class]);

        //seeders para asistente:
        $this->call([AsistenteSeeder::class]);

        //seeders para comentarios:
        //$this->call([ComentarioSeeder::class]);

        //seeders para respuestas:
        //$this->call([RespuestaSeeder::class]);
    }
}
