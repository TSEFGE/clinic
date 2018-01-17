<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultorioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultorio', function (Blueprint $table) {
            $table->increments('idConsultorio');
            $table->integer('idUsuario');
            $table->integer('idEspecialidad');
            $table->integer('numero');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('idUsuario')->references('idUsuario')->on('users')->onDelete('cascade');
            $table->foreign('idEspecialidad')->references('idEspecialidad')->on('cat_especialidad')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultorio');
    }
}
