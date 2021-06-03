<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->string('nombre');
            $table->string('razon')->nullable();
            $table->string('rfc')->unique()->nullable();
            $table->string('email')->unique();
            $table->string('calle');
            $table->string('exterior');
            $table->string('interior')->nullable();
            $table->string('ecalle');
            $table->string('ycalle')->nullable();
            $table->string('colonia');
            $table->string('postal')->nullable();
            $table->string('ciudad');
            $table->string('estado');
            $table->string('pais');
            $table->string('particular')->unique()->nullable();
            $table->string('oficina')->nullable();
            $table->string('movil')->unique();
            $table->double('limitecredito')->nullable();
            $table->integer('diascredito')->nullable();
            $table->integer('diasbloqueo')->nullable();
            $table->string('descuento')->nullable();
            $table->date('birthday')->nullable();
            $table->foreignId('sucursal')->constrained('sucursals');
            $table->foreignId('segmento')->constrained('segmentos');
            $table->foreignId('giro')->constrained('giros');
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
        Schema::dropIfExists('clientes');
    }
}