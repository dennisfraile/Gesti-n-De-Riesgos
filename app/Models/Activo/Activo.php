<?php

namespace App\Models\Activo;

use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    //
    protected $table = 'activo';
    protected $primparykey = 'idactivo';
    protected $fillable = ['idactivo', 'nombreactivo', 'descripactivo', 
    'idta','idem'];
    public $timestamps =false;
    public function tipoactivo(){
    	return $this->hasmany(TipoActivo::class);
    }
    public function empresa(){
        return $this->belongsto(Empresa::class);
    }
    public function tratamientoriesgo(){
        return $this->belongsto(TratamientoRiesgo::class);
    }
    public function riesgos(){
        return $this->belongsto(Riesgo::class);
    }

}
