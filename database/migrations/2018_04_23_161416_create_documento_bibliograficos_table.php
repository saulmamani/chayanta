<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentoBibliograficosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento_bibliograficos', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha');
            $table->string('nombre',  100);
            $table->text('descripcion');
            $table->string('url');
            $table->integer('users_id')->unsigned()->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('documento_bibliograficos');
    }
}
