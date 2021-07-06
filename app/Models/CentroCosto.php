<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentroCosto extends Model
{
    protected $fillable = [
        'descripcion',
        'estado'
    ];

    protected $hidden = ['created_at','updated_at'];
    
    public function ordenes(){
        return $this->hasMany(Orden::class);
    }
    
    use HasFactory;
}
