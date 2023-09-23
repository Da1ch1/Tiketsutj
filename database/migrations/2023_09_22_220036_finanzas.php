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
        Schema::create('finanzas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->nullable(); //select
            $table->string('Matricula');
            $table->string('Nombre_Alumno');
            $table->string('Contacto');
            $table->string('Fecha_convenio');
            $table->string('Monto');
            $table->string('Plan_pago');
            $table->string('Estatus');
            $table->timestamps();
    
            $table->foreign('user_id')->references('id')->on('users')->onDelete("set null");
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
