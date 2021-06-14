<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $fillable = [
        'cliente_id',
        'tipo',
        'marca',
        'modelo',
        'serie',
        'economico',
        'placa'
    ];

    protected $hidden = ['created_at','updated_at'];

    public function cliente() {

        return $this->belongsTo(Cliente::class);

    }

    public function ordenes(){

        return $this->hasMany(Cliente::class);

    }

    use HasFactory;
}
