<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignsKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //claves en tabla asistente:
        Schema::table('asistente', function(Blueprint $table){
            $table->foreign('matricula_id')
            ->references('id')
            ->on('matricula');

            $table->foreign('persona_id')
            ->references('id')
            ->on('persona');
        });

        //claves en tabla matricula:
        Schema::table('matricula', function(Blueprint $table){
            $table->foreign('asistente_id')
            ->references('id')
            ->on('asistente');
        });

        //claves en tabla disertante:
        Schema::table('disertante', function(Blueprint $table){
            $table->foreign('persona_id')
            ->references('id')
            ->on('persona');
        });

        //claves en tabla galeria:
        Schema::table('galeria', function(Blueprint $table){
            $table->foreign('curso_id')
            ->references('id')
            ->on('curso');
        });

        //claves en tabla curso:
        Schema::table('curso', function(Blueprint $table){
            $table->foreign('disertante_id')
            ->references('id')
            ->on('disertante');

            $table->foreign('galeria_id')
            ->references('id')
            ->on('galeria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('asistente', function(Blueprint $table){
            $table->dropForeign(['matricula_id']);
            $table->dropForeign(['persona_id']);
        });

        Schema::table('matricula', function(Blueprint $table){
            $table->dropForeign(['asistente_id']);
        });

        Schema::table('disertante', function(Blueprint $table){
            $table->dropForeign(['persona_id']);
        });

        Schema::table('galeria', function(Blueprint $table){
            $table->dropForeign(['curso_id']);
        });

        Schema::table('curso', function(Blueprint $table){
            $table->dropForeign(['disertante_id']);
            $table->dropForeign(['galeria_id']);
        });
    }
}
