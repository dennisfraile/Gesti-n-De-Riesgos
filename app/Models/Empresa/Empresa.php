<?php

namespace App\Models\Empresa;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //
    protected $table = 'empresa';

    protected $primparykey = 'idempresa';

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
