<?php

namespace App\Models\TratamientoRiesgo;

use Illuminate\Database\Eloquent\Model;

class TipoTratamiento extends Model
{
    //
    protected $table = 'tipotratamiento';

    protected $primarykey = 'idtipotratamiento';

    public $timestamps=false;


    protected $fillable = [
    	'nombretipotrata', 
    	'descriptipotrata'
    ];

       
    public function tratamientoriesgo(){

       	return $this->belongsto(TratamientoRiesgo::class);
       }
      

}
