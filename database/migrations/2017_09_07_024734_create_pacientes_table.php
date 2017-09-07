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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 64);
            $table->string('paterno', 64);
            $table->string('materno', 64);
            $table->string('sexo', 32);
            $table->date('fechaNacimiento');
            $table->string('rfc', 13);
            $table->string('direccion', 128);
            $table->string('telefono', 10);
            $table->string('celular', 10);
            $table->integer('idOcupacion');
            $table->integer('idReligion');
            $table->string('email', 256);
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
