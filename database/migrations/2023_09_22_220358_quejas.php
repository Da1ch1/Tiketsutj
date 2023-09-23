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
        Schema::create('quejas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('Fecha');
            $table->string('Matricula');
            $table->string('Contacto');
            $table->bigInteger('categoria_id')->unsigned()->nullable(); //select
            $table->string('Descricpion');
            $table->string('Lugar');
            $table->bigInteger('user_id')->unsigned()->nullable(); //select
            $table->timestamps();
    
            $table->foreign('user_id')->references('id')->on('users')->onDelete("set null");
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete("set null");
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
