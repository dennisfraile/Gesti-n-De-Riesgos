<?php

namespace App\Models\Control;

use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    //
    protected $table = 'control';
    protected $primparykey = 'idcontrol';
    protected $fillable = ['idcontrol', 'descripcontrol',
     'idtrat','encargado','fechainicio','fechafin','estado','presupuesto'];
    //public $timestamps =['fechainicio','fechafin'];
    public function procedimiento(){
        return $this->hasmany(Procedimiento::class);
    }
    public function tratamientotiesgo(){
        return $this->belognsto(TratamientoRiesgo::class);
    }
}
