<?php

namespace App\Models\Empresa;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //
    protected $table = 'rol';
    protected $primparykey = 'idrol';
    protected $fillable = ['idrol', 'nombrerol', 'descriprol'];
    public $timestamps =false;
    public function Empleado(){
        return $this->belongsto(Empleado::class);
    }
}
