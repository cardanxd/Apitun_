<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Giro extends Model
{
    protected $fillable = [
        'descripcion',
        'estado'
    ];

    protected $hidden = ['created_at','updated_at'];

    public function clientes(){

        return $this->hasMany(Cliente::class);

    }

    use HasFactory;
}
