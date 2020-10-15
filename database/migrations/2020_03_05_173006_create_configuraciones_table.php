<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguracionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuraciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mp_title')->default('')->nullable();
            $table->string('mp_description')->default('')->nullable();
            $table->float('mp_unit_price', 8, 2)->default(1)->nullable();
            $table->string('mp_access_token')->default('')->nullable();
            $table->string('mp_public_key')->default('')->nullable();
            $table->string('mp_client_id')->default('')->nullable();
            $table->string('mp_client_secret')->default('')->nullable();
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
        Schema::dropIfExists('configuraciones');
    }
}
