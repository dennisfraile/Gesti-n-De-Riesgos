<?php

namespace App\Models\TratamientoRiesgo;

use Illuminate\Database\Eloquent\Model;

class TratamientoRiesgo extends Model
{
    //
    protected $table = 'tratamientoriesgo';
    protected $primparykey = 'idtratamiento';
    protected $fillable = ['idtratamiento', 'descriptratamiento', 'nombretratamiento', 'id'];
    public $timestamps =false;
    public function tipotratamiento(){
    	return $this->hasmany(TipoTratamiento::class);
    }
   
}
