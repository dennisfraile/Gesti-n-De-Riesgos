<?php

namespace App\Models\Empresa;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    protected $table = 'empleado';
    protected $primparykey = 'idempleado';
    protected $fillable = ['idempleado', 'nombreempleado', 'apellido', 'email'
    ,'foto','idempr','idrl'];
    public $timestamps =false;
    public function Rol(){
        return $this->belongsto(Rol::class);
    }
    public function Empresa(){
        return $this->belongsto(Empresa::class);
    }
}
