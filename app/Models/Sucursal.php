<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $fillable = [
        'descripcion',
        'empresa',
        'centro_costo',
        'cuenta_contable',
        'estado',
        'zona'
    ];

    protected $hidden = ['created_at','updated_at'];
    
    public function clientes(){

        return $this->hasMany(Cliente::class);

    }

    use HasFactory;
}
