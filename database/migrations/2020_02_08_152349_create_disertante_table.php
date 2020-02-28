<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisertanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disertante', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('persona_id')->nullable();
            $table->string('prefijo')->default('');
            $table->text('cv')->default('');
            $table->boolean('destacado')->default(0);
            $table->timestamps();
            //$table->timestamp('fecha_congreso');
            /*$table->string('fecha_congreso');
            $table->string('hora_congreso');*/
            //$table->unsignedBigInteger('curso_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disertante');
    }
}
