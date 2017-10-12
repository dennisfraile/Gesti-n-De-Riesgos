<?php

namespace App\Models\Control;

use Illuminate\Database\Eloquent\Model;

class Paso extends Model
{
    //
    protected $table = 'paso';

    protected $primparykey = 'idpaso';

    public $timestamps =false;


    protected $fillable = [
    	'idprocedimiento',
    	'correlativo', 
    	'nombrepaso', 
    	'descripaso',
    	'realizado'
    ];
    
    public function procedimiento(){
        return $this->belongsto(Procedimiento::class);
    }
}
