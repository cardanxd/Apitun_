<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $fillable = [
        'descripcion',
        'estado'
    ];

    protected $hidden = ['created_at','updated_at'];

    public function vehiculos(){

        return $this->hasMany(Vehiculo::class);
    
    }

    use HasFactory;
}
