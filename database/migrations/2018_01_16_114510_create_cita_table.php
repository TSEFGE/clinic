<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cita', function (Blueprint $table) {
            $table->increments('idCita');
            $table->integer('idConsultorio');
            $table->integer('idPaciente');
            $table->integer('idUsuario');
            $table->date('fecha');
            $table->time('horaIni');
            $table->time('horaFin');
            $table->integer('status');
            $table->string('nota', 255);
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('idConsultorio')->references('idConsultorio')->on('consultorio')->onDelete('cascade');
            $table->foreign('idPaciente')->references('idPaciente')->on('pacientes')->onDelete('cascade');
            $table->foreign('idUsuario')->references('idUsuario')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cita');
    }
}
