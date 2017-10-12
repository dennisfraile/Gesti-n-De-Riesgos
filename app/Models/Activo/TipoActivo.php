<?php

namespace App\Models\Activo;

use Illuminate\Database\Eloquent\Model;

class TipoActivo extends Model
{
    //
    protected $table = 'tipoactivo';

    protected $primparykey = 'idtipoactivo';

    public $timestamps =false;


    protected $fillable = [ 
    	'nombretipoactivo', 
    	'descriptipoactivo'
    ];
    
    public function activo(){
    	return $this->belongsto(Activo::class);
    }
}
