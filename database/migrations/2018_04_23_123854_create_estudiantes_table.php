<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstudiantesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigoRUDE');
            $table->string('ci',  15);
            $table->string('expedido',  5);
            $table->string('nombre',  20);
            $table->string('apellido',  50);
            $table->dateTime('fechaNacimiento');
            $table->string('lugarNacimiento',  50);
            $table->string('nacionalidad',  50);
            $table->string('estadoCivil',  20);
            $table->string('genero',  20);
            $table->string('celular',  20);
            $table->integer('anioIngreso');
            $table->integer('carrera_id')->unsigned()->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('carrera_id')->references('id')->on('carreras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('estudiantes');
    }
}
