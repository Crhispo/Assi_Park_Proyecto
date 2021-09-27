<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parqueadero extends Model
{
    use HasFactory;
    function tipo_parqueaderos_vehiculos(){
        return $this->belongsTo(tipo_parqueaderos_vehiculos::class);
    }
}
