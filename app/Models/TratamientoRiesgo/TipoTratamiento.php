<?php

namespace App\Models\TratamientoRiesgo;

use Illuminate\Database\Eloquent\Model;

class TipoTratamiento extends Model
{
    //
    protected $table = 'tipo_tratamiento';
    protected $primarykey = 'idtipotratamiento';
    protected $fillable = ['idtipotratamiento', 'nombretipotrata', 'descriptipotrata'];
       public $timestamps=false;
    public function tratamiento(){

       	return $this->belongsto(Tratamiento::class);
       }
      

}
