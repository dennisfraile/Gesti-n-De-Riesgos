<?php

namespace App\Models\TratamientoRiesgo;

use Illuminate\Database\Eloquent\Model;

class TratamientoRiesgo extends Model
{
    //
    protected $table = 'tratamientoriesgo';
    protected $primparykey = 'idtratamiento';
    protected $fillable = ['idtratamiento', 'descriptratamiento', 'nombretratamiento','idactivo', 'idtipotratamiento'];
    public $timestamps =false;
    public function tipoTratamiento(){
    	return $this->hasmany(TipoTratamiento::class);
    }
    public function activo(){
        return $this->belongsto(Activo::class);
    }
}
