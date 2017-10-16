<?php

namespace GestionDeRiesgos;

use Illuminate\Database\Eloquent\Model;

class TipoActivo extends Model
{
    protected $table = 'tipoactivo';

    protected $primaryKey = 'idtipoactivo';

    public $timestamps =false;


    protected $fillable = [ 
    	'nombretipoactivo', 
    	'descriptipoactivo'
    ];
}
