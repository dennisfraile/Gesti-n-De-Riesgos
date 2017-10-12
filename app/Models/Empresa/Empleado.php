<?php

namespace App\Models\Empresa;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    protected $table = 'empleado';

    protected $primparykey = 'idempleado';

    public $timestamps =false;
    

    protected $fillable = [
        'idempresa',
        'idrol', 
        'nombreempleado', 
        'apellido', 
        'email',
        'foto'
    ];

    
    public function Rol(){
        return $this->belongsto(Rol::class);
    }
    public function Empresa(){
        return $this->belongsto(Empresa::class);
    }
}
