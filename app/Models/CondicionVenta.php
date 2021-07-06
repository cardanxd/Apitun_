<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CondicionVenta extends Model
{
    protected $fillable = [
        'descripcion',
        'tipo',
        'estado'
    ];

    protected $hidden = ['created_at','updated_at'];

    public function ordenes(){
        return $this->hasMany(Orden::class);
    }

    use HasFactory;
}
