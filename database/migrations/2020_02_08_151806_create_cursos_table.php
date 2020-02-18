<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('disertante_id');
            $table->string('tema');
            //$table->timestamp('fecha_y_hora');
            $table->string('fecha_curso');
            $table->string('hora_curso');
            $table->text('contenido');
            $table->string('lugar');
            $table->unsignedBigInteger('galeria_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
