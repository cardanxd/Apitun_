<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Segmento extends Model
{
    protected $fillable = [
        'nombre'
    ];

    protected $hidden = ['created_at','updated_at'];
    
    public function clientes(){

        return $this->hasMany(Cliente::class);

    }

    use HasFactory;
}
