<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'razon',
        'rfc',
        'email',
        'calle',
        'exterior',
        'interior',
        'ecalle',
        'ycalle',
        'colonia',
        'postal',
        'ciudad',
        'estado',
        'pais',
        'particular',
        'oficina',
        'movil',
        'limitecredito',
        'diascredito',
        'diasbloqueo',
        'descuento',
        'birthday',
        'sucursal',
        'segmento',
        'giro'
    ];

    protected $hidden = ['created_at','updated_at'];

    public function vehiculos(){

        return $this->hasMany(Vehiculo::class);

    }

    public function ordenes(){

        return $this->hasMany(Orden::class);

    }

    public function sucursal() {

        return $this->belongsTo(Sucursal::class);

    }

    public function segmento() {

        return $this->belongsTo(Segmento::class);

    }

    public function giro() {

        return $this->belongsTo('app\Models\Giro');

    } 
}
