<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePacientesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente', function (Blueprint $table) {
            $table->increments('idPaciente');
            $table->string('rfc', 13);
            $table->string('nombre', 100);
            $table->string('paterno', 100);
            $table->string('materno', 100);
            $table->date('fechaNac');
            $table->string('telCasa', 20);
            $table->string('telCel', 20);
            $table->string('telTrab', 20);
            $table->string('telRad', 20);
            $table->boolean('conExped');
            $table->string('email', 150);
            /*$table->string('direccion', 128);
            $table->integer('idOcupacion');
            $table->integer('idReligion');
            $table->string('sexo', 32);*/
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pacientes');
    }
}
