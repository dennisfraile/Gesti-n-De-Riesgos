<?php

namespace App\Models\Activo;

use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    //
    protected $table = 'activo';
    protected $primparykey = 'idactivo';
    protected $fillable = ['idtactivo', 'nombreactivo', 'descripactivo', 
    'idtipoactivo','idempresa'];
    public $timestamps =false;
    public function tipoactivo(){
    	return $this->hasmany(TipoActivo::class);
    }
    public function empresa(){
        return $this->belongsto(Empresa::class);
    }
    public function tratamientos(){
        return $this->hasmany(TratamientoActivo::class);
    }
    public function riesgos(){
        return $this->hasmany(Riesgo::class);
    }

}
