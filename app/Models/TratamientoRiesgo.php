<?php

namespace GestionDeRiesgos\Models;

use Illuminate\Database\Eloquent\Model;

class TratamientoRiesgo extends Model
{
    //
    protected $table = 'tratamientoriesgo';

    protected $primaryKey = 'idtratamiento';

    public $timestamps =false;

    protected $fillable = [
        'idactivo',
        'idtipotratamiento',
        'nombretratamiento',
        'descriptratamiento'
    ];
    
    public function tipotratamiento(){
    	return $this->hasmany(TipoTratamiento::class);
    }
    public function activo(){
        return $this->hasmany(Activo::class);
    }
   
}
