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
        Schema::create('soportes', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('asunto');
            $table->string('descripcion');
            $table->string('fecha');
            $table->string('nombre_cliente');
            $table->string('Seguimiento');
            $table->string('fecha_cierre')->nullable(); // Permite valores nulos
            $table->string('comentarios');
            $table->bigInteger('user_id')->unsigned()->nullable(); //select
            $table->bigInteger('estado_id')->unsigned()->nullable(); //select
            $table->bigInteger('prioridad_id')->unsigned()->nullable(); //select
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete("set null");
            $table->foreign('estado_id')->references('id')->on('estados')->onDelete("set null");
            $table->foreign('prioridad_id')->references('id')->on('prioridads')->onDelete("set null");
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
