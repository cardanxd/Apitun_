<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $fillable = [
        'fecha',
        'vendedor',
        'cliente',
        'vehiculo',
        'cilindros',
        'condicionventa',
        'urgenciainicial',
        'atencion',
        'comentarios',
        'centrocosto',
        'placa',
        'ceniceros',
        'cristales_rotos',
        'quemacocos',
        'espejo_izq',
        'espejo_der',
        'tapon',
        'antena',
        'tapetes',
        'varilla',
        'radio',
        'espejo_int',
        'gato',
        'extinguidor',
        'emblemas',
        'encendedor',
        'llanta',
        'km',
        'combustible',
        'transmision',
        'vestiduras'
    ];

    protected $hidden = ['created_at','updated_at'];

    public function cliente() {

        return $this->belongsTo(Cliente::class);

    }

    public function vehiculo() {

        return $this->belongsTo(Vehiculo::class);

    }

    use HasFactory;
}
