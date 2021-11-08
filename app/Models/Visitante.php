<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    use HasFactory;
    protected $table = 'Visitante';
    protected $primaryKey = 'ID_VISITANTE';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ID_TIPO_IDENTIFICACION',
        'NUMERO_DOCUMENTO',
        'NOMBRE',
        'APELLIDO',
        'DIRECCION',
        'CELULAR1',
        'CELULAR2',
    ];

    function TipoIdentificacion()
    {
        return $this->belongsTo(TipoIdentificacion::class);
    }
}
