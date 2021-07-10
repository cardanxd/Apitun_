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
        'birthday'
    ];

    protected $hidden = ['created_at','updated_at'];

    public function vehiculos(){

        return $this->hasMany(Vehiculo::class);

    }

    public function ordenes(){

        return $this->hasMany(Orden::class);

    }
}
