<?php

use Illuminate\Database\Seeder;
use App\Comentario;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comentario = new Comentario();
        $comentario->comentario = 'Este es el primer comentario';
        $comentario->likes = 5;
        $comentario->noticia_id = 1;
        $comentario->user_id = 1; //user 1 es superadmin
        $comentario->save();
    }
}
