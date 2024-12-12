<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('nro_identificacion');
            $table->string('telefono');
            $table->string('email');
            $table->date('fecha_cita');
            $table->time('hora_cita');

            $table->unsignedBigInteger('id_servicio');
            
            $table->foreign('id_servicio')
            ->references('id')
            ->on('servicios')
            ->onDelete('cascade'); 
            
            /*  $table->foreign('id_usuario')
            ->references('id')
            ->on('usuarios')
            ->onDelete('cascade');
            $table->unsignedBigInteger('id_usuario');
            */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
