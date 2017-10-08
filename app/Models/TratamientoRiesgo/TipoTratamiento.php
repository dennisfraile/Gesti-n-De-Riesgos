<?php

namespace App\Models\TratamientoRiesgo;

use Illuminate\Database\Eloquent\Model;

class TipoTratamiento extends Model
{
    //
    protected $table = 'tipos_tratamientos';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'name', 'description'
       ];
       public $timestamps=false;
       public function tratamientos_riesgos(){
       	return $this->belongsto(TratamientoRiesgo::class);
       }

}
