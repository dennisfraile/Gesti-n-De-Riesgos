<?php

namespace App\Models\TratamientoRiesgo;

use Illuminate\Database\Eloquent\Model;

class TratamientoRiesgo extends Model
{
    //
    protected $table = 'tratamientos_riesgos';
    protected $primparykey = 'id';
    protected $fillable = ['id', 'description', 'actives_id', 'controls_id'];
    public $timestamps =false;
    public function tipos_tratamientos(){
    	return $this->hasmany(TipoTratamiento::class);
    }
}
