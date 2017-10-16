<?php

namespace GestionDeRiesgos\Models;

use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    protected $table = 'control';

    protected $primaryKey = 'idcontrol';

    public $timestamps=false;


    protected $fillable=[
        'idtratamiento',
        'idprocedimiento', 
        'descripcontrol',
        'encargado',
        'fechainicio',
        'fechafin',
        'estado',
        'presupuesto' 
    ];


   
    public function procedimiento(){
        return $this->hasmany(Procedimiento::class);
    }
    public function tratamientotiesgo(){
        return $this->belognsto(TratamientoRiesgo::class);
    }
} 
