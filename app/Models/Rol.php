<?php

namespace GestionDeRiesgos\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //
    protected $table = 'rol';

    protected $primparykey = 'idrol';

    public $timestamps =false;
    

    protected $fillable = [
    	'nombrerol', 
    	'descriprol'
    ];
   
    public function Empleado(){
        return $this->belongsto(Empleado::class);
    }
}
