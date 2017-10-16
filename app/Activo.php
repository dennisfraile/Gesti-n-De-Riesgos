<?php

namespace GestionDeRiesgos;

use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    protected $table = 'activo';

    protected $primaryKey = 'idactivo';

    public $timestamps =false;

    protected $fillable = [
        'idtipoactivo',
        'idempresa',
        'nombreactivo', 
        'descripactivo'
    ];
}
