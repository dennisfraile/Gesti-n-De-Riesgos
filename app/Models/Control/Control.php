<?php

namespace App\Models\Control;

use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    protected $table = 'control';

    protected $primparykey = 'idcontrol';

    public $timestamps=false;


    protected $fillable=[
        'idtratamiento', 
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
