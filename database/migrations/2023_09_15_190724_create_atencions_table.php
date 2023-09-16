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
        Schema::create('atenciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('libro_id')->nullable()->constrained('libros');
            //crear la relacion polimorfica estudiantes o docentes//
            $table->morphs('atencionable');
            $table->date('fecha');
            $table->time('hora');
            $table->date('fecha_devolucion')->nullable();
            $table->integer('asignatura')->nullable(); 
            $table->integer('motivo')->nullable();
            $table->integer('tipo_atencion')->nullable();
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
        Schema::dropIfExists('atenciones');
    }
};
