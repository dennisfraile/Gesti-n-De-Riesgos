<?php

namespace GestionDeRiesgos\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //
    protected $table = 'empresa';

    protected $primaryKey = 'idempresa';

    public $timestamps =false;


    protected $fillable = [ 
    	'nombreempresa', 
    	'descripempresa',
    	'politica',
    	'objetivo',	
    	'alcance'
    ];
    
    public function empleado(){
        return $this->hasmany(Empleado::class);
    }
}
