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
        Schema::create('contactanos', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Email');
            $table->string('Tel');
            $table->string('Puesto')->nullable();
            $table->string('Empresa')->nullable();
            $table->string('Asunto')->nullable();
            $table->text('Contenido')->nullable();   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactanos');
    }
};
