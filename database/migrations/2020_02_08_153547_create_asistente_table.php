<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('matricula_id')->nullable();
            $table->unsignedBigInteger('persona_id');
            $table->unsignedBigInteger('mercadopagos_id')->nullable();
            $table->foreign('mercadopagos_id')->references('id')->on('mercadopagos');
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
        Schema::dropIfExists('asistente');
    }
}
