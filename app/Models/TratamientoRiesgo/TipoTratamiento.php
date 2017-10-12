<?php

namespace App\Models\TratamientoRiesgo;

use Illuminate\Database\Eloquent\Model;

class TipoTratamiento extends Model
{
    //
    protected $table = 'tipotratamiento';
    protected $primarykey = 'idtipotratamiento';
    protected $fillable = ['idtipotratamiento', 'nombretipotrata', 'descriptipotrata'];
       public $timestamps=false;
    public function tratamientoriesgo(){

       	return $this->belongsto(TratamientoRiesgo::class);
       }
      

}
