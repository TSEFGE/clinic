<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePacienteMedidasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente_medidas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idPaciente');
            $table->date('fecha');
            $table->string('peso', 10);
            $table->string('cuello', 10);
            $table->string('pecho', 10);
            $table->string('ca', 10);
            $table->string('cm', 10);
            $table->string('cb', 10);
            $table->string('cadera', 10);
            $table->string('muslo', 10);
            $table->string('pantorrilla', 10);
            $table->string('tobillo', 10);
            $table->string('brazo', 10);
            $table->string('munieca', 10);
            $table->string('talla', 10);
            $table->string('imc', 10);
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
        Schema::drop('paciente_medidas');
    }
}
