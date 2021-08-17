<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoIdentificacion extends Model
{
    use HasFactory;

    function user(){
        return $this->hasMany(User::class, 'tipodocumento_id');
    }

    protected $table = 'tipo_identificaciones';
}
