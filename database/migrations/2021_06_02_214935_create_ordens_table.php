<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordens', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha');
            $table->string('tecnico');
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->foreignId('vehiculo_id')->constrained('vehiculos');
            $table->string('cilindros');
            $table->foreignId('condicionventa_id')->constrained('condicion_ventas');
            $table->enum('urgenciainicial', ['Baja', 'Media','Alta']);
            $table->string('atencion')->nullable();
            $table->longText('trabajo');
            $table->foreignId('centrocosto_id')->constrained('centro_costos');
            $table->enum('placa', ['true', 'false']);
            $table->enum('ceniceros', ['true', 'false']);
            $table->enum('cristales_rotos', ['true', 'false']);
            $table->enum('quemacocos', ['true', 'false']);
            $table->enum('espejo_izq', ['true', 'false']);
            $table->enum('espejo_der', ['true', 'false']);
            $table->enum('tapon', ['true', 'false']);
            $table->enum('antena', ['true', 'false']);
            $table->enum('tapetes', ['true', 'false']);
            $table->enum('varilla', ['true', 'false']);
            $table->enum('radio', ['true', 'false']);
            $table->enum('espejo_int', ['true', 'false']);
            $table->enum('gato', ['true', 'false']);
            $table->enum('extinguidor', ['true', 'false']);
            $table->enum('emblemas', ['true', 'false']);
            $table->enum('encendedor', ['true', 'false']);
            $table->enum('llanta', ['true', 'false']);
            $table->double('km');
            $table->double('combustible');
            $table->string('transmision');
            $table->string('vestiduras');
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
        Schema::dropIfExists('ordens');
    }
}
