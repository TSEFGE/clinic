<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('idUsuario');
            $table->string('nomUsuario', 10);
            $table->string('nombre', 200);
            $table->integer('idEspecialidad')->unsigned();
            $table->string('email', 50)->unique();
            $table->string('password', 15);
            $table->integer('nivel');
            $table->rememberToken();
            $table->timestamps();

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
        Schema::dropIfExists('users');
    }
}
