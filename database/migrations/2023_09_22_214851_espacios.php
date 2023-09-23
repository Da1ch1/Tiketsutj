<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espacios', function (Blueprint $table) {
        $table->engine="InnoDB";
        $table->bigIncrements('id');
        $table->bigInteger('user_id')->unsigned()->nullable(); //select
        $table->string('Fecha_solicitud');
        $table->string('Fecha_uso');
        $table->string('Hora_inicio');
        $table->string('Hora_fin');
        $table->string('Propocito');
        $table->bigInteger('tipo_id')->unsigned()->nullable(); //select
        $table->string('Nombre_solicitante');
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users')->onDelete("set null");
        $table->foreign('tipo_id')->references('id')->on('tipos')->onDelete("set null");
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
