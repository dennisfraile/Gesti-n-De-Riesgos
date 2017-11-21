<?php

namespace GestionDeRiesgos\Models;

use Illuminate\Database\Eloquent\Model;

class TipoTratamiento extends Model
{
    //
    protected $table = 'tipotratamiento';

    protected $primaryKey = 'idtipotratamiento';

    public $timestamps=false;


    protected $fillable = [
        
    	'nombretipotrata', 
    	'descriptipotrata'
    ];

       
    public function tratamientoriesgo(){

       	return $this->belongsto(TratamientoRiesgo::class);
       }
      

}
