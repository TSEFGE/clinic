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
            $table->integer('idConsultorio')->unsigned();
            $table->integer('idPaciente')->unsigned();
            $table->integer('idUsuario')->unsigned();
            $table->date('fecha');
            $table->time('horaIni');
            $table->time('horaFin');
            $table->integer('status');
            $table->string('nota', 255);
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('idConsultorio')->references('idConsultorio')->on('consultorio')->onDelete('cascade');
            $table->foreign('idPaciente')->references('idPaciente')->on('paciente')->onDelete('cascade');
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
